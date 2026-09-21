<?php
include "../db.php";

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = "user";

    $sql = "INSERT INTO users(name,email,password,role)
            VALUES('$name','$email','$password','$role')";

    if(mysqli_query($conn,$sql)){
        header("Location: ../html/login.php");
        exit();
    }else{
        echo "Registration Failed!";
    }
}
?>