<?php

    $server="localhost";
    $username="root";
    $password="root1234";
    $db="safeBuy1";


    $conn = mysqli_connect($server,$username,$password,$db) or die ("connection failed");


    session_start();


    $username1 = $_POST['username'];
    $password1= $_POST['password'];


    $result = mysqli_query($conn,"SELECT * FROM userdetails2 WHERE username LIKE '{$username1}' AND pwd LIKE '{$password1}' LIMIT 1");
    
$check = mysqli_fetch_array($result);
if(isset($check)){

    $_SESSION["user"] = $username1;

header("Location:index.php");

}else{


header("Location:login.php");

}


    
?>