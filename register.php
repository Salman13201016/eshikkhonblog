<?php
	include "database/connect.php";
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';
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

        $email_exist = "SELECT u_email FROM user WHERE u_email ='$email' LIMIT 1";
        $email_exist = mysqli_query($conn,$email_exist);
        //
        if(mysqli_num_rows  ($email_exist)>=1){
            $error .= '<span> Your Email is already existed </span>';
        }
        elseif($fullname==NULL || $email==NULL || $password ==NULL || $confirm_password ==NULL || $mobile == NULL ||  $university ==NULL){
            $error .=  '<span style = "float:left;"> Required Field </span>';
        }
        elseif(strlen($fullname) <5){
            $error .=  '<span> Your Fullname Length must be at least 5 characters </span>';
        }
        elseif($password != $confirm_password){
            $error .=  '<span> Your Password does not match </span>';
        }

        
        else{
            $password = md5($password);
            $vkey = md5(time().$email);
            $sql = "INSERT INTO user (`u_name`,`u_mobile`,`u_email`,`u_university`,`vkey`,`verified`,`u_password`) VALUES ('$fullname','$mobile','$email','$university','$vkey',0,'$password')";
            $result = mysqli_query($conn,$sql);
            
            if($result){
				$mail = new PHPMailer;

				//Enable SMTP debugging. 
				// $mail->SMTPDebug = 3;                               
				//Set PHPMailer to use SMTP.
				$mail->isSMTP();            
				//Set SMTP host name                          
				$mail->Host = "smtp.gmail.com";
				//Set this to true if SMTP host requires authentication to send email
				$mail->SMTPAuth = true;                          
				//Provide username and password     
				$mail->Username = "your_email";                 
				$mail->Password = "your email password";                           
				//If SMTP requires TLS encryption then set it
				$mail->SMTPSecure = "tls";                           
				//Set TCP port to connect to 
				$mail->Port = 587;                                   

				$mail->From = "salmanmdsultan@gmail.com";
				$mail->FromName = "Salman";

				$mail->addAddress($email, "Salman");

				$mail->isHTML(true);

				$mail->Subject = "Email Verification from eshikkhonBlog";
				$mail->Body = "<a href='http://localhost/eShikkhon/Blog/blog/verify.php?vkey=$vkey'>Click this Activation Link</a>";

				if(!$mail->send()) 
				{
					echo "Mailer Error: " . $mail->ErrorInfo;
				} 
				else 
				{
					echo "Message has been sent successfully";
				}
                header('location:success.php');

            }
            else{
                $error.='<span>"'. $sql . "<br>" .mysqli_error($con).'"</span>';
            }
            
        }
        
              
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
							<form class="form-auth-small" action="" method="POST">
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
