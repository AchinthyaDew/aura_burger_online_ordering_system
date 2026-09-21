<?php
session_start();
include("../db.php");

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: ../html/catogories.php");
    exit();
}

$orderID = "AB" . rand(10000, 99999);

$name = $_POST['customer_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$payment = $_POST['payment_method'];

$subtotal = 0;
$quantity = 0;

foreach ($_SESSION['cart'] as $item) {
    $subtotal += ($item['price'] * $item['quantity']);
    $quantity += $item['quantity'];
}
$total = $subtotal + 300;
$order_date = date("Y-m-d H:i:s");
$status = "Pending";

$sql = "INSERT INTO orders(customer_name, phone, address, payment_method, quantity, total_price, order_date, status)
VALUES('$name','$phone','$address','$payment','$quantity','$total','$order_date','$status')";


if (mysqli_query($conn, $sql)) {

    $_SESSION['order_id'] = $orderID;
    $_SESSION['customer_name'] = $name;
    $_SESSION['total_price'] = $total;

    unset($_SESSION['cart']);


    $id = mysqli_insert_id($conn);
    header("Location: order_success.php?id=" . $id);
    exit();
} else {
    echo mysqli_error($conn);
}
