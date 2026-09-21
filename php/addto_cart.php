<?php
session_start();
include("../db.php");

if (!isset($_GET['id'])) {
    exit();
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
$product = mysqli_fetch_assoc($result);

$item = [
    'id' => $product['id'],
    'name' => $product['name'],
    'price' => $product['price'],
    'quantity' => 1,
    'image' => $product['image']
];

$_SESSION['cart'][] = $item;

if (isset($_GET['redirect']) && $_GET['redirect'] == 'cart') {
    header("Location: cart.php");
    exit();
}
echo count($_SESSION['cart']);
?>