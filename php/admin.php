<?php
include "../db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <h2>🍔 Aura Burger</h2>
            </div>
            <ul class="menu">
                <ul class="menu">
                    <li><a href="#dashboard"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                    <li><a href="#addmenu"><i class="fa-solid fa-circle-plus"></i> Add Menu Item</a></li>
                    <li><a href="#menuitems"><i class="fa-solid fa-burger"></i> Menu Items</a></li>
                    <li><a href="#orders"><i class="fa-solid fa-clipboard-list"></i> Orders</a></li>
                    <li><a href="#feedback"><i class="fa-solid fa-comment-dots"></i> Feedback</a></li>
                    <li><a href="#" onclick="window.location.href='../html/index.php';"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                </ul>
            </ul>

            <div class="promo">
                <h3>Delicious Food</h3>
                <p>Happy Customers</p>
                <img src="../assets/admin.jpg" alt="">
            </div>
        </aside>


        <main class="main-content">
            <div id="dashboard" class="topbar">
                <h1>Aura Burger Admin Panal</h1>
            </div>
            <div class="card" id="addmenu">
                <h2>Add Menu Item</h2>
                <form action="addproduct.php" method="POST" enctype="multipart/form-data">
                    <div class="form-grid">
                        <div>
                            <label>Item Image</label>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box" placeholder="Image">
                        </div>

                        <div>
                            <label>Burger Name</label>
                            <input type="text" name="name" placeholder="Burger Name" required>
                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="description" placeholder="Description"></textarea>
                        </div>

                        <div>
                            <label>Price</label>
                            <input type="text" name="price" placeholder="Price" required>
                        </div>

                        <div>
                            <label>Category</label>
                            <select name="category" required>
                                <option value="Burgers">Burger</option>
                                <option value="Combo">Combo</option>
                                <option value="Sides">Sides</option>
                                <option value="Drinks">Drinks</option>
                                <option value="Desserts">Desserts</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="addproduct">Add Product</button>
                </form>
            </div>

            <!-- Menu Items-->
            <div class="card" id="menuitems">
                <hr>
                <h2>Menu Items</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $result = mysqli_query($conn, "SELECT* FROM products");
                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['image']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['category']; ?></td>

                            <td>
                                <a class="update" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                                <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>

                    <?php } ?>
                </table>
            </div>

            <!-- Manage Oders -->
            <div class="card" id="orders">
                <hr>
                <h2>Manage orders</h2>

                <table>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Payment Method</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>Current Status</th>
                        <th>Update Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $orderResult = mysqli_query($conn, "SELECT* FROM orders");
                    while ($orders = mysqli_fetch_assoc($orderResult)) {
                    ?>
                        <tr>
                            <td><?php echo $orders['id']; ?></td>
                            <td><?php echo $orders['customer_name']; ?> </td>
                            <td><?php echo $orders['phone']; ?> </td>
                            <td><?php echo $orders['address']; ?> </td>
                            <td><?php echo $orders['payment_method']; ?> </td>
                            <td><?php echo $orders['total_price']; ?> </td>
                            <td><?php echo $orders['order_date']; ?> </td>
                            <td>
                                <?php
                                $status = $orders['status'];

                                if ($status == "Pending") {
                                    echo "<span class='pending'>Pending</span>";
                                } elseif ($status == "Preparing") {
                                    echo "<span class='preparing'>Preparing</span>";
                                } elseif ($status == "Out for Delivery") {
                                    echo "<span class='delivery'>Out for Delivery</span>";
                                } elseif ($status == "Delivered") {
                                    echo "<span class='delivered'>Delivered</span>";
                                } elseif ($status == "Cancelled") {
                                    echo "<span class='cancelled'>Cancelled</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <form action="update_order.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $orders['id']; ?>">

                                    <select name="status">
                                        <option value="Pending" <?= ($orders['status'] == "Pending") ? "selected" : "" ?>>Pending</option>
                                        <option value="Preparing" <?= ($orders['status'] == "Preparing") ? "selected" : "" ?>>Preparing</option>
                                        <option value="Out for Delivery" <?= ($orders['status'] == "Out for Delivery") ? "selected" : "" ?>>Out for Delivery</option>
                                        <option value="Delivered" <?= ($orders['status'] == "Delivered") ? "selected" : "" ?>>Delivered</option>
                                        <option value="Cancelled" <?= ($orders['status'] == "Cancelled") ? "selected" : "" ?>>Cancelled</option>
                                    </select>

                                    <button type="submit">Update</button>
                                </form>
                            </td>
                            <td>
                                <a class="delete" href="delete_order.php?id=<?php echo $orders['id']; ?>" onclick="return confirm('Delete this order?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
            </div>
            </table>
    </div>

    <!-- Feedback-->
    <div class="card" id="feedback">
        <hr>
        <h2>Users' Feedback</h2>

        <table>

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Rating</th>
                <th>Feedback</th>
                <th>Date</th>
            </tr>

            <?php
            $result = mysqli_query($conn, "SELECT* FROM feedback ORDER BY id DESC ");
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['subject'] ?></td>
                    <td><?= $row['rating'] ?> ⭐</td>
                    <td><?= $row['feedback'] ?></td>
                    <td><?= $row['created_at'] ?></td>

                </tr>

            <?php } ?>

        </table>
</body>

</html>