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
    <title>Services</title>
    <link rel="stylesheet" href="../css/services.css">
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
    <section class="services" id="services">
        <div class="hero-content">
            <div class="left">
                <h1>THE HEART OF <br><span style="color:(249, 150, 2);"> Aura BURGER</span></h1>
                <p>Passionate.Freindly.Dedicated.Our taem works together to deliver the best burger experience for you.
                </p>
            </div>
        </div>
    </section>


    <section class="team">

        <h1>Meet Our Team</h1>
        <p class="team-text">
            The people behind Aura Burger's exceptional taste and service.
        </p>

        <div class="team-container">

            <div class="team-card">
                <img src="../assets/chef.jpg" alt="">
                <h3>👨‍🍳 Head Chef</h3>
                <h3>Chef Arjun</h3>
                <p>Creating flavours, perfecting every bite.</p>
            </div>

            <div class="team-card">
                <img src="../assets/kitchen manager.jpg" alt="">
                <h3>👩‍🍳 Kitchen Manager</h3>
                <h3>Chef Daniel Perera</h3>
                <p>Preparing every burger with fresh ingredients and perfection.</p>
            </div>

            <div class="team-card">
                <img src="../assets/service manager.jpg" alt="">
                <h3>🚚 Delivery Manager</h3>
                <h3></h3>
                <p>Ensuring every order arrives hot, fresh, and on time.</p>
            </div>

            <div class="team-card">
                <img src="../assets/guest relationship.jpg" alt="">
                <h3>🤝 Service Lead</h3>
                <h3>Ameli Perera</h3>
                <p>Providing friendly support and an unforgettable experience.</p>
            </div>

            <div class="team-card">
                <img src="../assets/delivery manager.jpg" alt="">
                <h3>🧹 Support Team</h3>
                <h3></h3>
                <p>Maintaining a clean and comfortable environment for everyone.</p>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="service-hero">
            <div class="service-left">
                <h1>How We can Serve You And Deliver Your Favourite's Food</h1>
                <p>We always provide the best service for you and delivery your favourites food in your location</p>
                <img src="../assets/service.jpg" alt="">
            </div>
        </div>


        <div class="service-box">
            <div class="service-card">
                <i class="fa-solid fa-motorcycle"></i>
                <h2>HOME DELIVERY</h2>
                <p>Hot, fresh and fast.<br>
                    Delivered to your doorstep.
                </p>
            </div>


            <div class="service-card">
                <i class="fa-solid fa-bag-shopping"></i>
                <h2>TAKEAWAY
                </h2>
                <p> Grab your favorites<br>
                    and enjoy on your way.
                </p>
            </div>



            <div class="service-card">
                <i class="fa-solid fa-chair"></i>
                <h2>
                    DINE-IN EXPERIENCE
                </h2>

                <p>
                    Cozy ambiance, great<br>
                    music and delicious food.
                </p>

            </div>



            <div class="service-card">

                <i class="fa-solid fa-burger"></i>

                <h2>
                    PREMIUM INGREDIENTS
                </h2>

                <p>
                    Fresh ingredients in<br>
                    every burger.
                </p>

            </div>



            <div class="service-card">

                <i class="fa-solid fa-utensils"></i>

                <h2>
                    COMBO MEALS
                </h2>

                <p>
                    Perfect combos that<br>
                    satisfy every craving.
                </p>

            </div>




            <div class="service-card">

                <i class="fa-solid fa-calendar"></i>

                <h2>
                    EVENTS & PARTIES
                </h2>

                <p>
                    Celebrate your moments<br>
                    with us.
                </p>

            </div>


        </div>


    </section>
    </div>
    </div>
    </section>
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