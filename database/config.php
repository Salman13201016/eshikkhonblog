<?php
   $serverame = "localhost";
   $username = "root";
   $password = "";
   $dbname = "eshikhonblog";
   
   $conn = mysqli_connect($serverame,$username,$password);
   //check connection
   if(!$conn){
        die("connection failed:".mysqli_connect_error());
   }

   //create database
   $sql = "CREATE DATABASE $dbname";

   if(mysqli_query($conn,$sql)){
       echo "Database created succesfully";
   }

   else{
       echo "Error creating database".mysqli_error($conn);
   }

   mysqli_close($conn);
?>