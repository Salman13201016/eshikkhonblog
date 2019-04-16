<?php
    include "database/connect.php";
    session_start();// Starting Session
    // Storing Session
    $user_check=$_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $sql = "SELECT * FROM user WHERE u_email = '$user_check' LIMIT 1";
    $sql = mysqli_query($conn,$sql);
    //var_dump($sql);
    $row = mysqli_fetch_assoc($sql);
    $login_session =$row['u_name'];
    if(!isset($login_session)){
        mysqli_close($conn); // Closing Connection
        header('location:login.php'); // Redirecting To Home Page
    }
?>