<?php

include('adminLogin.php'); // Include Admin Login Script

if ((isset($_SESSION['adminname']) != '')) {
	header('Location: adminHome.php');
} 

?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		
		<style>
			div {
    			border: 0px solid black;
    			margin-top: 10px;
    			margin-bottom: 10px;
    			margin-right: 15px;
    			margin-left: 8px;
    			background-color: white;
			}
		</style>
	</head>
 
	<body>
	
	<div class = containers>

	<div class="loginBox">
		<h3>Admin Login Form</h3>
		<br><br>
	<form method="post" action="">
		<label>Admin Name:</label><br>
			<input type="text" name="adminname" placeholder="username" /><br><br>
		<label>Password:</label><br>
			<input type="password" name="password" placeholder="password" />  <br><br>
			<input type="submit" name="submit" value="Login" /> 
	</form>
		<div class="error"><?php echo $error;?></div>
		
	<form action = "index.php" method="post">
		<p>Back To Regular Users:</p>
		<input type="submit" name="user" value="Users" />
	</form>
	</div>
	</body>
</html>
