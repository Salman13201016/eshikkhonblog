<?php
    include "database/connect.php";
    session_start(); //start session
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($email) || empty($password)){
            echo '<script> alert("Invalid User name or password") </script>';
        }
        else{
            $password = md5($password);
            var_dump($password);
            $sql = "SELECT * FROM user WHERE u_email = '$email' AND u_password='$password'";
            $sql = mysqli_query($conn,$sql);
            var_dump($sql);
            if(mysqli_num_rows($sql)>=1){
                echo "sdasdasd";
                $_SESSION['login_user'] = $email;
                echo $_SESSION['login_user'];
                header('location:dashboard.php');
    
            }
            else{
                echo '<script> alert("Invalid  name or password") </script>';
                echo mysqli_error($conn);
            }
        }
        
    }
    if(isset($_SESSION['login_user'])){
        header("dashboard.php");
    }
?>


<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Registration | eShikkhon Blog</title>
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
    <!-- WRAPPER -->

	<div id="wrapper">
		<div class="vertical-align-wrap">
            
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Sign In</p>
							</div>
							<form class="form-auth-small" action="" method="POST">
								
								<div class="form-group">
									<label for="email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                    
                                </div>
								<div class="form-group">
									<label for="password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    
								</div>

								<button type="submit" class="btn btn-primary btn-lg btn-block" name = "submit">Sign Up</button>

							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>