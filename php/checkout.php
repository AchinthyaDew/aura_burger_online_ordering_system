<?php
session_start();
$count = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['quantity'];
    }
}
$total = 0;

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: ../html/catogories.php");
    exit();
}
foreach ($_SESSION['cart'] as $item) {
    $total += ($item['price'] * $item['quantity']);
}
$subtotal = $total + 300;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
    

    <section class="checkout-container">
        <div class="checkout-form">
            <h2>Delivery Details</h2>

            <form action="order.php" method="POST">

                <input type="text" name="customer_name" placeholder="Full Name" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <textarea name="address" placeholder="Delivery Address" required></textarea>

                <select name="payment_method" id="payment_method" onchange="toggleCard()" required>
                    <option value="">Select Payment Method</option>
                    <option value="Cash On Delivery">Cash On Delivery</option>
                    <option value="Card Payment">Card Payment</option>
                </select>

                <div id="card-box">

                    <input type="text" name="card_name" placeholder="Card Holder Name">
                    <input type="text" id="cardNumber" name="card_number" placeholder="1234 5678 9012 3456" maxlength="19">

                    <div class="roww">
                        <input type="text" name="expiry" placeholder="MM/YY" maxlength="5">
                        <input type="password" name="cvv" placeholder="CVV" maxlength="3">
                    </div>
                </div>

                <button type="submit" class="place-btn">Place Order</button>
            </form>
        </div>

        <div class="order-summary">
            <h2>Order Summary</h2>
            <?php foreach ($_SESSION['cart'] as $item) {
            ?>
                <div class="summary-item">
                    <span>
                        <?php echo $item['name']; ?>
                        <?php echo $item['quantity']; ?>
                    </span>

                    <span>Rs. <?php echo $item['price'] * $item['quantity']; ?></span>
                </div>

            <?php } ?>
            <hr>
            <div class="summary-item">
                <span>Delivery Fee</span>
                <span>Rs.300</span>
            </div>

            <div class="summary-item total">
                <span>Total</span>
                <span>Rs. <?php echo $subtotal; ?></span>
            </div>
        </div>
        </div>
    </section>

    <script>
        function toggleCard() {
            let payment = document.getElementById("payment_method").value;
            let card = document.getElementById("card-box");
            if (payment == "Card Payment") {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        }


        const card = document.getElementById("cardNumber");
        card.addEventListener("input", function(e) {
            let value = e.target.value.replace(/\D/g, '');
            value = value.replace(/(.{4})/g, "$1 ").trim();
            e.target.value = value;
        });
    </script>

</body>

</html>