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
    <title>Aura</title>
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="https://boxicons.com/css/boxicons.min.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
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
    <section class="aboutus" id="aboutus">
        <div class="hero">
            <div class="hero-content">
                <h1>Crafted with Passion. Served with Excellence.</h1>
                <p>Where passion meets flavor. At Aura Burger, we transform simple ingredients into extraordinary
                    burgers,
                    creating memorable moments for every guest who walks through our doors.</p>
                <button onclick="location.href='../html/services.php'" class="servises-button">Our Staff and
                    Services</button>
            </div>
        </div>
    </section>

    <section class="story-chef">
        <div class="story">
            <h2>Our Story</h2>

            <p>Welcome to Aura Burger, where great food meets great people.

                Founded in Colombo 07, Aura Burger started with a simple mission: to serve fresh, flavorful burgers made
                with quality ingredients and care. Today, we proudly serve customers through our branches in Galle,
                Matara,
                and Nuwara Eliya.

                Our skilled Sri Lankan chefs prepare every burger with passion and attention to detail, creating a
                dining
                experience that feels both delicious and memorable.

                Whether you're with family, friends, or dining solo, Aura Burger is always ready to welcome you.

                Serving great burgers. Creating great memories. </p>
        </div>

        <div class="chef">
            <img src="../assets/chef.jpg" alt="">

            <div class="info">
                <h2>Our Chef</h2>
                <h3>Chef Arjun</h3>
                <p>Founder & Head Chef with over 15 years of culinary experience.</p>
            </div>
            <button onclick="location.href='../html/services.php'" class="servises-button">Our Staff and
                Services</button>
        </div>
    </section>

    <section class="mission-vission">
        <div class="mission">
            <div class="line"></div>
            <h2>Our Mission</h2>
            <p>Experience the perfect blend of premium ingredients, bold flavors, and genuine hospitality at Aura
                Burger.
            </p>
        </div>

        <div class="middle-image">
            <img src="../assets/Galle.jpg" alt="">
        </div>

        <div class="vission">
            <h2>Our Vision</h2>
            <div class="line"></div>
            <p>To become Sri Lanka's most loved burger restaurant by delivering outstanding food, innovation, and
                hospitality that people can trust and enjoy.</p>
        </div>
    </section>


    <!--footer-->
    <footer>

        <div class="footer-brand">
            <h1>AURA</h1>
            <span>BURGER</span>

            <p>
                More than a burger.<br>
                It's an Aura.
            </p>

            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="../assets/facebook.jpg" alt="">
                </a>

                <a href="#" class="social-icon">
                    <img src="../assets/insta.jpg" alt="">
                </a>

                <a href="#" class="social-icon">
                    <img src="../assets/youtube.jpg" alt="">
                </a>

                <a href="#" class="social-icon">
                    <img src="../assets/twitter.jpg" alt="">
                </a>
            </div>
        </div>

        <div class="footer-contact">
            <h3>Contact Information</h3>

            <ul>
                <li>Main Street, Colombo 07, Sri Lanka</li>
                <li>+94 359 6895</li>
                <li>auraburger@gmail.com</li>
                <li>10:00 AM - 11:00 PM</li>
            </ul>
        </div>

        <div class="footer-nav">
            <h3>Quick Links</h3>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>

    </footer>
</body>

</html>