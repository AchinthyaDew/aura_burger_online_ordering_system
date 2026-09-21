<?php
include "../db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    mysqli_query($conn, "UPDATE products SET image='$image',name='$name',description='$description', price='$price', category='$category'WHERE id=$id");

    header("Location:admin.php");
}
?>

<form method="POST">

    <input type="file" name="image" value="<?php echo $row['image']; ?>">
    <input type="text" name="name" value="<?php echo $row['name']; ?>">
    <input type="text" name="price" value="<?php echo $row['price']; ?>">
    <textarea name="description"><?php echo $row['description']; ?></textarea>
    <select name="category" value="<?php echo $row['category']; ?>">
        <option value="Burgers">Burger</option>
        <option value="Combo">Combo</option>
        <option value="Sides">Sides</option>
        <option value="Drinks">Drinks</option>
        <option value="Desserts">Desserts</option>
    </select>

    <button name="update">Update Product</button>

</form>