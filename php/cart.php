<?php
session_start();
$count = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['quantity'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>


    <div class="navbar">
        <img src="../assets/Picture1.jpg" alt="">

        <ul>
            <li><a href="../html/index.php">Home</a></li>
            <li><a href="../html/catogories.php">Catogories</a></li>
            <li><a href="../html/aboutus.php">About Us</a></li>
            <li><a href="../html/contact.php">Contact</a></li>
            <li><a href="../html/login.php">Login</a></li>
            <li><a href="../php/cart.php" class="cart-icon"><i class="fa-solid fa-cart-arrow-down fa-2xl"></i>
                    <span class="cart-count" id="cart-count"><?php echo $count; ?></span></a></li>
        </ul>
    </div>

    <section class="cart-container">

        <div class="cart-items">

            <h2>🛒 Your Cart</h2>

            <?php
            $total = 0;
            ?>
            <?php foreach ($_SESSION['cart'] as $index => $item):

                $subtotal = $item['price'] * $item['quantity'];
                $total += $subtotal;

            ?>

                <div class="cart-card">

                    <img src="../uploads/<?php echo basename($item['image']); ?>" alt="">

                    <div class="details">
                        <h3><?php echo $item['name']; ?></h3>
                        <p>Rs. <?php echo $item['price']; ?></p>

                        <div class="qty-box">
                            <a href="update_cart.php?action=minus&id=<?php echo $index; ?>">
                                <button>-</button>
                            </a>
                            <span><?php echo $item['quantity']; ?></span>

                            <a href="update_cart.php?action=plus&id=<?php echo $index; ?>">
                                <button>+</button>
                            </a>
                        </div>
                    </div>


                    <div class="right-side">
                        <div class="price">
                            Rs. <?php echo $subtotal; ?>
                        </div>
                        <br>

                        <div class="delete-btn">
                            <a href="delete_cart.php?id=<?php echo $index; ?>">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <div class="summary">

            <h2>🗒️ Order Summary</h2>

            <div class="row">
                <span>Subtotal</span>
                <span>Rs. <?php echo $total; ?></span>
            </div>

            <div class="row">
                <span>Delivery Fee</span>
                <span>Rs. 300</span>
            </div>

            <hr>

            <div class="row total">
                <span>Total</span>
                <span>Rs. <?php echo $total + 300; ?></span>
            </div>

            <a href="checkout.php" class="checkout-btn">
                Proceed to Checkout
            </a>

        </div>

    </section>

</body>

</html>