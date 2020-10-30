<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../css/admin/create119OperatorAccount.css">
	<link rel="stylesheet" type="text/css" href="../css/admin/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../css/includecss/footer.css">
	<title>119 Operator Account</title>
</head>
<body>
	<div class="breadcrum">
		119 Operator Account
	</div>
	<div class="form">
		<center>
			<form action="" method="post">
				<div class="row">
			  		<div class="column1">
			  			<canvas class="picture" id="picture">
										
						</canvas>
					</div>
			  		<div class="column2">
			  			<label>User Name</label><br>
						<label>First Name</label><br>
						<label>Last Name</label><br>
						<label>Password</label><br>
						<label>Re-enter Password</label><br>
			  		</div>
			  		<div class="column3">
			  			<label class="lab" >User Name</label>
			  			<input type="text" name="userName" id="userName"><br>
			  			<label class="lab" >First Name</label>
						<input type="text" name="firstName" id="firstName"><br>
						<label class="lab" >Last Name</label>
						<input type="text" name="lastName" id="lastName"><br>
						<label class="lab">Password</label>
						<input type="password" name="password1" id="password1"><br>
						<label class="lab" >Re-enter Password</label>
						<input type="text" name="password2" id="password2"><br>
						<p class="hide" id="err">Error</p>
						<input type="submit" value="Create Account" name="submit" id="submit">
			  		</div>
				</div>
			</form>
		</center>
	</div>

	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../javascript/jquery.sticky.js"></script>
	<script type="text/javascript" src="../javascript/navigation.js"></script>
	<script type="text/javascript" src="../javascript/operatorCreator.js"></script>
</body>
</html>