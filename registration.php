<?php

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$gender = $_POST['gender'];
$sport = $_POST['sport'];
$classification = $_POST['classification'];
$moreinfo = $_POST['moreinfo'];

$connection = mysqli_connect('localhost', 'root', 'root', 'project2db');

	if($connection) {
		echo "We are connected ";
	} else {
		die("Database connection failed");
	}
	
	$query = "INSERT INTO registration(username, firstname, lastname, middlename, 
	gender, sport, classification, moreinfo) ";
	$query .= "VALUES ('$username', '$firstname', '$lastname', '$middlename', '$gender', 
	'$sport', '$classification', '$moreinfo')";
	
	$result = mysqli_query($connection, $query);
	
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
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>



<body>
<center>
<table border="0" width="40%">
<div class="container">
<form action="registration.php" method="post" name="Form" onsubmit="" action="">
	
	<tr>
		<td>
			<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" length="50" required="">
		</td>
	</tr></div>
		
	<tr>
		<td>
			<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr>		
		<td>
			<div class="form-group">
			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr>	
		<td>
			<div class="form-group">
			<label for="middlename">Middle Name</label>
			<input type="text" name="middlename" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr>
		<td><div class="form-group">
			<label for="gender">Gender</label>
			<select name="gender" class="form-control" length="7" required="">
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select></td>
	</tr></div>
	
	<tr>
		<td>
			<div class="form-group">
			<label for="sport">Sport</label>
			<input type="text" name="sport" class="form-control" length="50" required="">
		</td>
	</tr></div>
	
	<tr>
		<td><div class="form-group">
			<label for="classification">Classification</label>
			<select name="classification" class="form-control" length="15" required="">
				<option></option>
				<option>Athlete</option>
				<option>Coach</option>
			</select></td>
	</tr></div>
	
	<tr>
		<td>
			<div class="form-group">
			<label for="moreinfo">More Info</label>
			<input type="text" name="moreinfo" class="form-control">
		</td>
	</tr>
	<tr>
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