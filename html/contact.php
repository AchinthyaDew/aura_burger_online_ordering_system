<?php
include "../db.php";

session_start();
$count = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['quantity'];
    }
}

$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
    <section class="Contact" id="Contact">
        <div class="content">
            <h1>Contact Us</h1>
            <p>Have a question or just hungry for the perfect burger? Drop us a message and let's talk burgers</p>
        </div>
    </section>

    <div class="contact-cards">

        <div class="cards">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>auraburger@gmail.com</p>
        </div>

        <div class="cards">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p> +94 359 6895</p>
        </div>

        <div class="cards">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Address</h3>
            <p> Mainstreet, Colombo 7, Srilanka</p>
        </div>
    </div>

    <section class="container">
        <div class="left-container">
            <h2>Our Location</h2>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps?q=Colombo%207,Sri%20Lanka&output=embed"
                    width="100%"
                    height="450"
                    style="border:0;"
                    loading="lazy">
                </iframe>
            </div>

            <p class="location-text">
                <i class="fa-solid fa-location-dot"></i>
                Easily find us here!
            </p>

        </div>

        <div class="right-container">
            <h2>We Value Your Feedback</h2>
            <p>Your opinion helps us serve you better</p>

            <form action="../php/feedback.php" method="POST">

                <div class="feedback-box">
                    <div class="row">

                        <input type="text" name="fullname" placeholder="Your Name" required>

                        <input type="email" name="email" placeholder="Your Email" required>

                    </div>

                    <input type="text" name="subject" placeholder="Subject">

                    <textarea
                        name="feedback"
                        placeholder="Your Message"
                        required></textarea>

                    <div class="rating">

                        <span>Rating</span>

                        <label><input type="radio" name="rating" value="1">⭐</label>
                        <label><input type="radio" name="rating" value="2">⭐</label>
                        <label><input type="radio" name="rating" value="3">⭐</label>
                        <label><input type="radio" name="rating" value="4">⭐</label>
                        <label><input type="radio" name="rating" value="5">⭐</label>

                    </div>

                    <button type="submit">
                        <i class="fa-solid fa-paper-plane"></i>
                        Send Message
                    </button>

            </form>

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
</body>

</html>