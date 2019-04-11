


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
            
        }
        else{
            echo '
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-6 col-sm-offset-3">
                        <br><br> <h2 style="color:#0fad00">Success</h2>
                        <h3>Dear User</h3>
                        <p style="font-size:20px;color:#5C5C5C;">
                            Something Went Wrong
                        </p>
                        </div>
                        
                    </div>
                </div>';
        }
    ?>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3">
            <br><br> <h2 style="color:#0fad00">Success</h2>
            <h3>Dear User</h3>
            <p style="font-size:20px;color:#5C5C5C;">
                You account is verified
            </p>
            </div>
            
        </div>
    </div>
</body>    
</html>