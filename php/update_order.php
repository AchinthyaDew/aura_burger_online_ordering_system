<?php
include("../db.php");

$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE orders SET status='$status' WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    header("Location: admin.php#orders");
}else{
    echo "Update Failed";
}
?>