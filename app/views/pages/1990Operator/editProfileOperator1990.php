<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../css/1990Operator/editProfileOperator1990.css">
	<link rel="stylesheet" type="text/css" href="../css/includecss/operatorHeader.css">
	<link rel="stylesheet" type="text/css" href="../css/includecss/footer.css">
	<title>Edit Profile</title>
</head>
<body>
	<div class="breadcrum">
		Edit Profile
	</div>

	<div class="form">
		<center>
			<form action="updateprofileoperator1990" method="post" id="editProfile">
				<table class="info">
					<tr>
						<td class="proPic">
							<canvas class="picture" id="picture">
								
							</canvas>
						</td>
						<td class="labels">
							<label>First Name</label><br>
							<label>Last Name</label><br>
							<label>Password</label><br>
							<label>Re-enter Password</label><br>
						</td>
						<td class="inputs">
							<?php foreach($data['admin'] as $operatorInfo){ ?>
							<input type="text" name="firstName" id="firstName" value="<?php echo $operatorInfo->firstName; ?>"><br>
							<input type="text" name="lastName" id="lastName" value="<?php echo $operatorInfo->lastName; ?>"><br>
							<input type="password" name="password1" id="password1"value="<?php echo $operatorInfo->password; ?>"><br>
							<input type="password" name="password2" id="password2" value="<?php echo $operatorInfo->password; ?>"><br>
							<?php } ?>
							<p class="hidden" id="error1">Passwords do not match!</p>
							<p class="hidden" id="error2">Please, fill the password feilds!</p>
						</td>
					</tr>
					<tr class="save">
						<td colspan="3">
							<input type="submit" value="Save" name="submit" id="submit">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../javascript/jquery.sticky.js"></script>
	<script type="text/javascript" src="../javascript/navigation.js"></script>
	<script type="text/javascript" src="../javascript/editProfile.js"></script>
</body>
</html>