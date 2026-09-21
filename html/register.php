<?php
include "../db.php";

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
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://boxicons.com/css/boxicons.min.css ">
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
    <section class="Register" id="register">
        <div class="register-container">
            <form action="../php/register.php" method="POST">
                <div class="register-form">
                    <div class="header">
                        <h1 style="color: rgb(219, 216, 211);font-size: 50px;font-weight:bold;text-align:center;">REGISTER
                        </h1>
                    </div>
                    <input type="name" id="name" placeholder="Name" name="name" />
                    <input type="email" id="email" placeholder="Email" name="email" />
                    <input type="password" id="password" placeholder="Password" name="password" />
                    <input type="hidden" name="role" value="user">
                    <button style="font-size: 30px;text-align: center; " value="register" name="register">Register</button>
                    <p>
                        Already have an account?
                        <a href="../html/login.php">Login</a>
                    </p>
                </div>
        </div>
        </form>
    </section>
    <script src="../js/login.js"></script>

</body>

</html>