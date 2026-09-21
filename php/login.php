<?php
session_start();
include "../db.php";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['ID'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == "admin") {
                header("Location: admin.php");
            } else {
                header("Location: ../html/catogories.php");
            }
            exit();
        } else {
            echo "Wrong Password!";
        }
    } else {
        echo "Email not found!";
    }
}
