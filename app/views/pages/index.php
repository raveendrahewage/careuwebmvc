<?php
	if(isset($_SESSION))
    {
        session_start();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="img/appLogo.png">
	<link rel="stylesheet" type="text/css" href="css/login/login.css">
	<title>Log In</title>
</head>
<body>
	<div class="form">
		<img src="img/AppLogo.png" class="logo">
		<center>
			<div class="appname">
				<p class="name1"><b>care</b></p><p class="name2"><b>U</b></p>
			</div>
			<div class="loginform">
			<p class="hide" id="err">Error</p>
				<form  method="post" id="logIn">
					<input type="text" id="username" name="username" placeholder="Username"><br>
					<input type="password" id="password" name="password" placeholder="Password"><br><br>
	    			<input type="submit" value="Log In" name="submit" id="submit"><br><br>
	    			<a href="verifyController/about" class="forgotpassword">Forgot password?</a><br>
	 			</form>

			</div>
		</center>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="javascript/formValidation.js"></script>
</body>
</html>