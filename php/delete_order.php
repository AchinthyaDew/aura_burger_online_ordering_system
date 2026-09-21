<?php
include("../db.php");

$id = $_GET['id'];

$sql = "DELETE FROM orders WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    header("Location: admin.php#orders");
}else{
    echo "Delete Failed";
}
?>