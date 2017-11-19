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
		<link rel="stylesheet" href="project2.css" />
	</head>
 
	<body>
	<article>
	
	<div class = containers>
	
	<nav>
  			<ul id="profilePic"></ul>
		</nav>

	<div class="loginBox">
		<h1>Admin Login Form</h1>
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
	</article>
	</body>
</html>
