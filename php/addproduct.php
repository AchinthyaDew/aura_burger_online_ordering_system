<?php
include "../db.php";

if (isset($_POST['addproduct'])) {
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $upload_folder = "uploads" . $image;

    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $image);

    $sql = "INSERT INTO PRODUCTS(image, name, description, price,category )
VALUES('$image','$name','$description', '$price', '$category')";

    mysqli_query($conn, $sql);
    header("Location:../html/catogories.php");
}
