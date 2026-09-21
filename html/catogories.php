<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "<script>
            alert('Please login first to view the Categories page!');
            window.location.href='login.php';
          </script>";
    exit();
}

include "../db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catogories</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
    <?php
    $count = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $count += $item['quantity'];
        }
    }
    ?>

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

    <section class="Menu" id="Menu">
        <div class="Menu-left">
            <div class="header">
                <h1 style="color:white">Crafted to <span style="color:rgb(249, 151, 5)">Perfection</span></h1>
                <hr style="width: 80px; color: rgb(245, 181, 20);">
                </hr>
                <p>Every burger is made with preimium ingredients, perfectly grilled and served with love. </p>
            </div>
        </div>
    </section>

    <section class="products">

        <div class="category-active"><img src="../assets/burger.svg" alt=""
                onclick="scrollToSection('burgers')"><br>BURGERS
        </div>
        <div class="category-active"><img src="../assets/combo.svg" alt=""
                onclick="scrollToSection('combos')"><br>COMBOS</div>
        <div class="category-active"><img src="../assets/sides.svg" alt="" onclick="scrollToSection('sides')"><br>SIDES
        </div>
        <div class="category-active"><img src="../assets/drink.svg" alt=""
                onclick="scrollToSection('drinks')"><br>DRINKS</div>
        <div class="category-active"><img src="../assets/desert.svg" alt=""
                onclick="scrollToSection('desserts')"><br>DESSERTS</div>

    </section>

    <!-- Burgers -->
    <section class="catogories" id="burgers">
        <h1 class="header">BURGERS</h1>
        <div class="slider-container">
            <span class="arrow left" onclick="prevSlide('burgers-slider')">&#10094;</span>

            <div class="slider" id="burgers-slider">

                <?php
                $result = mysqli_query($conn, "SELECT * FROM products WHERE category='Burgers'");

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card">
                        <img src="../uploads/<?php echo $row['image']; ?>" alt="">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <span class="Price">Rs.<?php echo $row['price']; ?></span><br>
                        <a href="../php/addto_cart.php?id=<?php echo $row['id']; ?>&redirect=cart" class="obtn">Order Now</a>
                        <a href="#" class="abtn" onclick="addToCart(<?php echo $row['id']; ?>); return false;">Add to cart</a>
                    </div>
                <?php
                }
                ?>
            </div>

            <span class="arrow right" onclick="nextSlide('burgers-slider')">&#10095;</span>
        </div>
    </section>

    <!-- Combos -->
    <section class="catogories" id="combos">
        <h1 class="header">COMBOS</h1>
        <div class="slider-container">
            <span class="arrow left" onclick="prevSlide('combos-slider')">&#10094;</span>

            <div class="slider" id="combos-slider">

                <?php
                $result = mysqli_query($conn, "SELECT * FROM products WHERE category='Combo'");

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card">
                        <img src="../uploads/<?php echo $row['image']; ?>" alt="">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <span class="Price">Rs.<?php echo $row['price']; ?></span><br>
                        <a href="../php/addto_cart.php?id=<?php echo $row['id']; ?>&redirect=cart" class="obtn">Order Now</a>
                        <a href="#" class="abtn" onclick="addToCart(<?php echo $row['id']; ?>); return false;">Add to cart</a>

                    </div>
                <?php
                }
                ?>
            </div>

            <span class="arrow right" onclick="nextSlide('combos-slider')">&#10095;</span>
        </div>
    </section>

    <!-- Sides -->
    <section class="catogories" id="sides">
        <h1 class="header">SIDES</h1>
        <div class="slider-container">
            <span class="arrow left" onclick="prevSlide('sides-slider')">&#10094;</span>

            <div class="slider" id="sides-slider">

                <?php
                $result = mysqli_query($conn, "SELECT * FROM products WHERE category='Sides'");
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card">
                        <img src="../uploads/<?php echo $row['image']; ?>" alt="">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <span class="Price">Rs.<?php echo $row['price']; ?></span><br>
                        <a href="../php/addto_cart.php?id=<?php echo $row['id']; ?>&redirect=cart" class="obtn">Order Now</a>
                        <a href="#" class="abtn" onclick="addToCart(<?php echo $row['id']; ?>); return false;">Add to cart</a>
                    </div>
                <?php
                }
                ?>
            </div>

            <span class="arrow right" onclick="nextSlide('sides-slider')">&#10095;</span>
        </div>
    </section>

    <!-- Drinks -->
    <section class="catogories" id="drinks">
        <h1 class="header">DRINKS</h1>
        <div class="slider-container">
            <span class="arrow left" onclick="prevSlide('drinks-slider')">&#10094;</span>

            <div class="slider" id="drinks-slider">

                <?php
                $result = mysqli_query($conn, "SELECT * FROM products WHERE category='Drinks'");
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card">
                        <img src="../uploads/<?php echo $row['image']; ?>" alt="">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <span class="Price">Rs.<?php echo $row['price']; ?></span><br>
                        <a href="../php/addto_cart.php?id=<?php echo $row['id']; ?>&redirect=cart" class="obtn">Order Now</a>
                        <a href="#" class="abtn" onclick="addToCart(<?php echo $row['id']; ?>); return false;">Add to cart</a>
                    </div>
                <?php
                }
                ?>
            </div>

            <span class="arrow right" onclick="nextSlide('drinks-slider')">&#10095;</span>
        </div>
    </section>

    <!-- Desserts -->
    <section class="catogories" id="desserts">
        <h1 class="header">DESSERTS</h1>
        <div class="slider-container">
            <span class="arrow left" onclick="prevSlide('desserts-slider')">&#10094;</span>

            <div class="slider" id="desserts-slider">

                <?php
                $result = mysqli_query($conn, "SELECT * FROM products WHERE category='Desserts'");

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card">
                        <img src="../uploads/<?php echo $row['image']; ?>" alt="">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <span class="Price">Rs.<?php echo $row['price']; ?></span><br>
                        <a href="../php/addto_cart.php?id=<?php echo $row['id']; ?>&redirect=cart" class="obtn">Order Now</a>
                        <a href="#" class="abtn" onclick="addToCart(<?php echo $row['id']; ?>); return false;">Add to cart</a>
                    </div>
                <?php
                }
                ?>
            </div>

            <span class="arrow right" onclick="nextSlide('desserts-slider')">&#10095;</span>
        </div>
    </section>

    <script src="../js/script.js"></script>
</body>

</html>