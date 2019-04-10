<?php
    include "database/connect.php";
    $error = NULL;
    
    // get the form data
    if(isset($_POST['submit'])){
         //sanitize from data
        $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn,$_POST['confirm_password']);
        $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
        $university = mysqli_real_escape_string($conn,$_POST['university']);
        $error .=  '<span>"'.$mobile.'"</span>';
        $email_exist = "SELECT u_email FROM user WHERE u_email =.$email LIMIT 1";
        $email_exist = mysqli_query($conn,$email_exist);
        $error .=  '<span>"'.strlen($email_exist).'"</span><br>';
        if(strlen($email_exist)>=1){
            $error .= '<span> Your Email is already existed </span>';
        }
        // if(mysqli_num_rows  ($email_exist)==1){
        //     $error .= '<span> Your Email is already existed </span>';
        // }
        elseif($fullname==NULL || $email==NULL || $password ==NULL || $confirm_password ==NULL || $mobile = NULL ||  $university ==NULL){
            $error .=  '<span style = "float:left;"> Required Field </span>';
        }
        elseif(strlen($fullname) <5){
            $error .=  '<span> Your Fullname Length must be at least 5 characters </span>';
        }
        elseif($password != $confirm_password){
            $error .=  '<span> Your Password does not match </span>';
        }
        // Email exist or not check  
        // elseif(mysqli_num_rows($email)>=1){
        //     $error .= '<span> Your Email is already existed </span>';
        // }
        // elseif(strlen($mobile) <11){
        //     $error .=  '<span> Your Mobile Length must be at least 11 number </span>';
        // }
        
        else{
            $password = md5($password);
            $vkey = md5(time().$fullname);
            $error .=  '<span>"'.$mobile.'"</span><br>';
            $sql = "INSERT INTO user (`u_name`,`u_mobile`,`u_email`,`u_university`,`vkey`,`verified`,`u_password`) VALUES ('$fullname','$mobile','$email','$password','$university','$vkey',0,'$password')";
            $result = mysqli_query($conn,$sql);
            $error .=  '<span>"'.strlen($result).'"</span>';
            if($result){
                $error .=  '<span> Succesfully Inserted </span>'; 
            }
            else{
                $error.='<span>"'. $sql . "<br>" .mysqli_error($result).'"</span>';
            }
            $error .=  '<span>"'.$mobile.'"</span>';
            $error .=  '<br><span>"'.$mobile.'"</span><br>';
        }
              
    }
   

?>






<!doctype html>
<html lang="en" class="fullscreen-bg">

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
    <!-- WRAPPER -->
    <center> <?php echo $error ?> </center>
	<div id="wrapper">
		<div class="vertical-align-wrap">
            
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Sign Up</p>
							</div>
							<form class="form-auth-small" action="#" method="POST">
								<div class="form-group">
									<label for="fullname" class="control-label sr-only">Full Name</label>
									<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Your Full Name">

                                </div>
								<div class="form-group">
									<label for="email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                    
                                </div>
								<div class="form-group">
									<label for="password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    
								</div>
								<div class="form-group">
									<label for="confirm_password" class="control-label sr-only">Confirm Password</label>
									<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                    
                                </div>
								<div class="form-group">
									<label for="mobile" class="control-label sr-only">Phone Number</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number">
                                   
								</div>
								<div class="form-group">
									<label for="university" class="control-label sr-only">University</label>
                                    <input type="text" class="form-control" id="university" name="university" placeholder="Enter Your university name">
                                    
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
