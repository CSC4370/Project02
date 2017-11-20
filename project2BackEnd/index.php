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
		
		<link rel="stylesheet" href="project2.css" />
		
		
		
		<style>
			
			
			
		</style>
		
	</head>
 
	<body>
	<article>
	
	<div class = containers>

	<nav>
  			<ul id="profilePic"></ul>
		</nav>
	
	<div class="loginBox">
		<h1>User Login Form</h1>
		<br><br>
	<form method="post" action="">
		<label>Username:</label><br>
			<input type="text" name="username" placeholder="username" /><br><br>
		<label>Password:</label><br>
			<input type="password" name="password" placeholder="password" />  <br><br>
			<input type="submit" name="submit" value="Login" /> 
			
	</form>
	
	<form action="guestSearch.php" method="post">
		<input type="submit" name="submit" value="Guest Tour" />
	</form><br />
	
	<form method="post" action="index2.php">
		
		<a href="forgot.php">Forgot Password</a> | 
		
		<a href="registration.php" style="font-size:14px">New? Then Register Here</a>
		
		<p>*For Authorized Users Only*</p>
		<p>
		<input type="submit" name="admin" value="Admin" />
		</center>
		</form>

		
	
	
		
	
	</div>
	</article>
	</body>
</html>
