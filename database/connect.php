<?php
    $serverame = "localhost";
    $username = "root";
    $password = "";
    $db = "eshikhonblog";
    
    $conn = mysqli_connect($serverame,$username,$password,$db);
    //check connection
    // if(!$conn){
    //      die("connection failed:".mysqli_connect_error());
    // }
    // else{
    //     die("connection Success:");
    // }
?>