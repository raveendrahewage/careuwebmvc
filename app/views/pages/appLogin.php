<?php
	$connection = mysqli_connect('localhost','root','','careu');

	$userName=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT userName,password
			FROM admins
			WHERE userName='{$userName}'
			AND password='{$password}'";

	// $query="UPDATE admins
	// 		SET password='{$password}'
	// 		WHERE userName='{$userName}'";

	$adminInfo=mysqli_query($connection,$query);
    if(mysqli_num_rows($adminInfo)>0)
    {	
    	// session_start();
    	// $_SESSION['userName']=$userName;
    	echo "Loging successfuly";
    }
    else
    {
    	echo "Incorrect username or password.";
    }

    mysqli_close($connection);
?>