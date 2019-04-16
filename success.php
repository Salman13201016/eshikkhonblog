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
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3">
            <br><br> <h2 style="color:#0fad00">Success</h2>
            <h3>Dear User</h3>
            <p style="font-size:20px;color:#5C5C5C;">Thank you for your registration.We have sent you a activation key in your email address to verify your account.
                Please go to your email now and login.
            </p>
            </div>
            
        </div>
    </div>
</body>    
</html>
<?php 
//   $to = "sultanmohammadsalman@gmail.com"; 
//   $sub = "Generic Mail"; 
//   $msg="Hello Geek! This is a generic email."; 
//   $headers = 'From: salmanmdsultan@gmail.com' . "\r\n";
//   $headers .= "MIME-Version: 1.0" . "\r\n";
//   $headers .= "Content-Type: text/html; charset=utf-8"."\r\n";
//   $result = mail($to,$sub,$msg,$headers);
//   var_dump($result);
//   if (mail($to,$sub,$msg,$headers)) 
//       echo "Your Mail is sent successfully."; 
//   else
//       echo "Your Mail is not sent. Try Again."; 
?> 
<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// $mail = new PHPMailer;

//Enable SMTP debugging. 
// $mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
// $mail->isSMTP();            
//Set SMTP host name                          
/***$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "salmanmdsultan@gmail.com";                 
$mail->Password = "Allahisone244343244343";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "salmanmdsultan@gmail.com";
$mail->FromName = "Salman";

$mail->addAddress("sultanmohammadsalman@gmail.com", "Salman");

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
}***/
?> 