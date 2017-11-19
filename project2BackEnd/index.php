<?php
include('userLogin.php'); // Include User Login Script

if ((isset($_SESSION['username']) != '')) {
	header('Location: userHome.php');
}

?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>User Login Form</title>
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
		<h3>User Login Form</h3>
		<br><br>
	<form method="post" action="">
		<label>Username:</label><br>
			<input type="text" name="username" placeholder="username" /><br><br>
		<label>Password:</label><br>
			<input type="password" name="password" placeholder="password" />  <br><br>
			<input type="submit" name="submit" value="Login" /> 
	</form>
	
	<form method="post" action="guestSearch.php">
		<input type="submit" name="submit" value="Guest Tour" />
		</form><br />

		<a href="registration.php" style="font-size:14px">New? Then Register Here</a>
	
		<div class="error"><?php echo $error;?></div>
		
	<form action = "index2.php" method="post">
		<p>For Authorized Users Only:</p>
		<input type="submit" name="admin" value="Admin" />
	</form>
	</div>
	</body>
</html>
