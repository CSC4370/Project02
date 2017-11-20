<?php

include("check.php");

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$gender = $_POST['gender'];
$sport = $_POST['sport'];
$classification = $_POST['classification'];
$moreinfo = $_POST['moreinfo'];

	if($db) {
		echo "Registration Successful! Return to Login. ";
	} else {
		die("Database connection failed");
	}
	
	$query = "INSERT INTO users(username, password, firstname, lastname, middlename, 
	gender, sport, classification, moreinfo) ";
	$query .= "VALUES ('$username', '$password', '$firstname', '$lastname', '$middlename', '$gender', 
	'$sport', '$classification', '$moreinfo')";
	
	$result = mysqli_query($db, $query);
	
	if(!$result) {
		die('Query FAILED' . mysqli_error());
	}

}
?>



<!DOCYTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
<title>SportsPage</title>


<link rel="stylesheet"
href="registration.css">


</head>



<body>

<div class = containers>

<a href="index.php" style="font-size:14px">Return to Login</a>

<br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />
<h1 align="center">User Login Form</h1>

<center>
<table border="0" width="40%">
<div class="container">
<form action="registration.php" method="post" name="Form" onsubmit="" action="">
	
	<tr align="center">
		<td>
			<div class="form-group">
			<label for="username">Username</label><br />
			<input type="text" name="username" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr align="center">
		<td>
			<div class="form-group">
			<label for="password">Password</label><br />
			<input type="password" name="password" class="form-control" length="50" required="">
		</td>
	</tr></div>
		
	<tr align="center">
		<td>
			<div class="form-group">
			<label for="firstname">First Name</label><br />
			<input type="text" name="firstname" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr align="center">		
		<td>
			<div class="form-group">
			<label for="lastname">Last Name</label><br />
			<input type="text" name="lastname" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr align="center">	
		<td>
			<div class="form-group">
			<label for="middlename">Middle Name</label><br />
			<input type="text" name="middlename" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr align="center">
		<td><div class="form-group">
			<label for="gender">Gender</label><br />
			<select name="gender" class="form-control" length="7" required="">
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select></td>
	</tr></div>
	
	<tr align="center">
		<td>
			<div class="form-group">
			<label for="sport">Sport</label><br />
			<input type="text" name="sport" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr align="center">
		<td><div class="form-group">
			<label for="classification">Classification</label><br />
			<select name="classification" class="form-control" length="15" required="">
				<option></option>
				<option>Athlete</option>
				<option>Coach</option>
			</select></td>
	</tr></div>
	
	<tr align="center">
		<td>
			<div class="form-group">
			<label for="moreinfo">More Info</label><br />
			<input type="text" name="moreinfo" class="form-control">
		</td>
	</tr>
	<tr align="center">
		<td align="center">
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		</td>
	</tr>
	</div>

</form>
</div>
</table>
</center>
</body>
</html>