<?php 

	/*
	
		DDoS Protection - Simple Captcha System
		- ReCaptcha
		- This is a simple DDoS Mitigation using a Captcha.
	
	*/
	
	if(!empty($_COOKIE['ddos_key']))
	{		
			header('Location: index.php');
	}
	
	if(!empty($_POST['continue'])){
		
		
		if(empty($_COOKIE['ddos_key']))
			{
			
				$length = 8;
				$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
				
				// Sets a 30 Mintue Session Before Renew
				setcookie("ddos_key", MD5($randomString), time() + 1800);
				header('Location: index.php');
				
				
			}
		
	
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>DDoS Protection - Simple System</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	
	
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container text-center">
		<div class="row">
			<form method="POST">
				<div class="form-group">
					<div class="jumbotron">
						<h1>DDoS Protection - Captcha System</h1>
						<p class="lead">The site is current under attack!</p><p> Please click the button below to access the site.</p>
						<input type="submit" name="continue"> </input> 
					</div> 
				</div>
			</form>
		</div>
    </div>


  </body>
</html>

