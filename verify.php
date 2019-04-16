<?php include "database/connect.php"; $error = NULL;?>


<html>
<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
    <?php
        if (isset($_GET['vkey'])){
            $vkey = $_GET['vkey'];
            $sql = "SELECT vkey,verified FROM user WHERE verified =0 AND vkey = '$vkey' LIMIT 1";
            $sql = mysqli_query($conn,$sql);
            //var_dump($sql);
            if(mysqli_num_rows($sql)>=1){
                $sql = "UPDATE user SET verified = 1 WHERE vkey ='$vkey' LIMIT 1";
                $sql = mysqli_query($conn,$sql);
                if($sql){
                    echo 
                        '<div class="container">
                            <div class="row text-center">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <h3>Dear User</h3>
                                    <p style="font-size:20px;color:#5C5C5C;">
                                        You email has been verified. you may now log in
                                    </p>
                                    <a href="register.php" class="btn btn-primary btn-lg btn-block"> Log in </a>
                                </div>
                                
                            </div>
                        </div>';
                }
                else{
                    echo "Something went wrong " . mysqli_error($conn);
                }
            }
            else{
                echo '
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-6 col-sm-offset-3">
                                <h3>Dear User</h3>
                                <p style="font-size:20px;color:#5C5C5C;">
                                    Invalid email or existed email
                                </p>
                                <a href="register.php" class="btn btn-primary btn-lg btn-block"> Log in </a>
                            </div>
                            
                        </div>
                    </div>';
            }
        }
        else{
            echo '
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h3>Dear User</h3>
                            <p style="font-size:20px;color:#5C5C5C;">
                                Something Went Wrong
                            </p>
                        </div>
                        
                    </div>
                </div>';
        }
    ?>
</body>    
</html>