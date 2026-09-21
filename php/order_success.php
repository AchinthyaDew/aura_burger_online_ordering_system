<?php
include "../db.php";
session_start();

$count = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['quantity'];
    }
}

if (!isset($_GET['id'])) {
    die("Order not found!");
}

$id = intval($_GET['id']);

$orderQuery = mysqli_query($conn, "SELECT * FROM orders WHERE id='$id'");

if (mysqli_num_rows($orderQuery) == 0) {
    die("Invalid Order!");
}

$order = mysqli_fetch_assoc($orderQuery);

$itemQuery = mysqli_query($conn, "SELECT * FROM order_items WHERE order_id='$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfull</title>
    <link rel="stylesheet" href="../css/order_success.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="navbar">
        <img src="../assets/Picture1.jpg" alt="">

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="../html/catogories.html">Catogories</a></li>
            <li><a href="../html/aboutus.html">About Us</a></li>
            <li><a href="../html/contact.php">Contact</a></li>
            <li><a href="../html/login.html">Login</a></li>
            <li><a href="../php/cart.php" class="cart-icon"><i class="fa-solid fa-cart-arrow-down fa-2xl"></i>
                    <span class="cart-count" id="cart-count"><?php echo $count; ?></span></a></li>
        </ul>
    </div>

    <section class="success">
        <div class="sucess-left">
            <i class="fa-solid fa-circle-check check"></i>
            <h2>YOUR ODER IS ON THE WAY!</h2>
            <p>Thanks for choosing AURA BURGER.
                <br>We've recieved your order and it's being prepared with care.
            </p>
            <div class="order-number">
                <span>ORDER NUMBER</span>
                <h2>#AB<?php echo str_pad($order['id'], 5, "0", STR_PAD_LEFT); ?></h2>
            </div>
        </div>

        <div class="success-right">
            <img src="../assets/deliveryboy.jpg" alt="">
        </div>
    </section>

    <section class="order-card">
        <div class="left">
            <h2><i class="fa-solid fa-file-lines"></i>
                Order Details</h2>
            <hr>

            <div class="customer">
                <p><i class="fa-solid fa-user"></i>
                    <strong>Customer</strong>
                </p>
                <span><?php echo $order['customer_name']; ?></span>
            </div>


            <div class="customer">
                <p><i class="fa-solid fa-location-dot"></i>
                    <strong>Address</strong>
                </p>
                <span><?php echo $order['address']; ?></span>
            </div>
            <hr>
            <?php while ($item = mysqli_fetch_assoc($itemQuery)) {
            ?>

                <div class="product">
                    <img src="../uploads/<?php echo $item['image']; ?>">

                    <div class="details">
                        <h3><?php echo $item['product_name']; ?></h3>
                        <p>Qty:<?php echo $item['qty']; ?></p>
                    </div>

                    <h4>LKR<?php echo number_format($item['price'], 2); ?></h4>
                </div>
            <?php
            }
            ?>
        </div>



        <div class="right">
            <h2><i class="fa-solid fa-motorcycle"></i>Delivery Info</h2>
            <hr>
            <p>Estimated Delivery Time</p>


            <hr>

            <div class="price">
                <span>Deliver Fee</span>
                <span>LKR 300.00</span>
            </div>

            <div class="price-total">
                <span>Total</span>
                <span>LKR <?php echo number_format($order['total_price'], 2); ?></span>
            </div>

            <div class="thanks">
                <i class="fa-solid fa-heart"></i>
                Thank you for supporting Aura Burger!
            </div>
        </div>
        </div>
    </section>



    <section class="buttons">

        <a href="../html/index.php" class="home">
            <i class="fa-solid fa-house"></i>
            Back To Home
        </a>
    </section>

    <section class="features">
        <div class="box">
            <i class="fa-solid fa-leaf"></i>
            <h4>Fresh Ingredients</h4>
            <p>Always Fresh</p>
        </div>

        <div class="box">
            <i class="fa-solid fa-motorcycle"></i>
            <h4>Fast Delivery</h4>
            <p>25-35 Minutes</p>
        </div>

        <div class="box">
            <i class="fa-solid fa-shield-halved"></i>
            <h4>Secure Payment</h4>
            <p>100% Protected</p>
        </div>

        <div class="box">
            <i class="fa-solid fa-heart"></i>
            <h4>Made With Love</h4>
            <p>By Our Chefs</p>
        </div>

    </section>
    </section>
</body>

</html>