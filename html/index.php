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
     <link rel="stylesheet" href="../css/style.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
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

     <section class="Home" id="Home">
         <div class="Home-left">
             <div class="header">
                 <h1 class="move">Enjoy Your <br>Meals</h1>
                 <p>
                     Welcome to BurgerLab where flavor meets innovation! Indulge in our
                     handcrafted burgers, made with fresh ingredients and bold recipes.
                     Experience the ultimate burger delight at BurgerLab today!
                 </p>

                 <button onclick="location.href='../html/catogories.php'" class="home-button">Order Now</button>
             </div>

             <div class="list">
                 <img src="../assets/cheese.jpg" alt="">
                 <img src="../assets/chicken.jpg" alt="">
                 <img src="../assets/chilli.jpg" alt="">
                 <img src="../assets/turkey.avif" alt="">
                 <img src="../assets/admin.jpg" alt="">
             </div>

     </section>


     <section class="offer-section">
         <div class="offer-content">
             <div class="offer-text">
                 <h1>Special Burger Deal 🍔</h1>

                 <h2>
                     GET <span>30% OFF</span>
                     <br>
                     ON YOUR FIRST ORDER
                 </h2>

                 <p>
                     Taste our premium burgers made with fresh ingredients,
                     juicy patties and special sauces.
                 </p>

                  <button onclick="location.href='../php/cart.php'" class="offer-text button">Order Now</button>
             </div>

             <div class="offer-image">
                 <img src="../assets/offer.jpg" alt="Burger Offer">
             </div>
         </div>
     </section>


     <section class="features-strip">
         <div class="features-item">
             <div class="icon"><i class="fa-solid fa-leaf"></i></div>
             <h3>Premium Ingredients</h3>
             <p>We use only the freshest and highest quality ingredients.</p>
         </div>

         <div class="features-item">
             <div class="icon"><i class="fa-solid fa-fire"></i></div>
             <h3>Perfectly Grilled</h3>
             <p>Grilled to perfection for maximum flavor.</p>
         </div>

         <div class="features-item">
             <div class="icon"><i class="fa-regular fa-heart"></i></div>
             <h3>Made With Love</h3>
             <p>Every burger is made with passion and cart.</p>
         </div>

         <div class="features-item">
             <div class="icon"><i class="fa-solid fa-utensils"></i></div>
             <h3>Exceptional Services</h3>
             <p>We serve great food with a great experience.</p>
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