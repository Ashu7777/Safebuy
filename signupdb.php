<?php
    include_once 'db.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $sql = "INSERT INTO userdetails2 (username, email, mobile, addr, pwd)
            VALUES ('$username', '$email', '$mobile', '$address', '$password');";
    mysqli_query($conn, $sql);

    header("Location: login.php")
?>