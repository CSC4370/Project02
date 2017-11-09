<?php

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];


$connection = mysqli_connect('localhost', 'root', 'root', 'project2');

	if($connection) {
		echo "We are connected";
	} else {
		die("Database connection failed");
	}
	
	$query = "INSERT INTO users(username, password) ";
	$query .= "VALUES ('$username', '$password')";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die('Query FAILED' . mysqli_error());
	}

}

?>

<html xmlns = "http://www.w3.org/1999/xhmtl">
<head>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<title> Welcome to ShowSkill </title>
	<h1> CSC 4320: Web Programming </h1>
		<center>
		<h1> ShowSkill </h1>
		<h3> -- Athlete & Coach Oriented Social Networking Service -- </h3>
		<h3> -- Register Here -- </h3><br />
		</center>
	</head>

	<body>
		<center>
		 <form action="https://grid.cs.gsu.edu/~cfrederick/csc4370/submit2login.php" 
		method="get">
		<table border="0">
			<tr>
				<td width="30%" align="middle"> Username </td>
				<td><input type="text" name="username"/> (Your email)</td>
			</tr>
			<tr>
				<td width="30%" align="middle"> First Name </td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td width="30%" align="middle"> Last Name </td>
				<td><input type="password" name="lastname"/></td>
			</tr>
			<tr>
				<td width="30%" align="middle"> Middle Name </td>
				<td><input type="password" name="middlename"/></td>
			</tr>
			<tr>
				<td width="30%" align="middle"> Gender </td>
				<td><select name="gender">
						<option>Male</option>
						<option>Female</option>
					</select></td>
			</tr>
			<tr>
				<td width="30%" align="middle"> Sport </td>
				<td><input type="password" name="sport"/></td>
			</tr>
			<tr>
				<td width="30%" align="middle"> Classification </td>
				<td><select name="classification">
						<option>Athlete</option>
						<option>Coach</option>
					</select></td>
			</tr>
			<tr>
				<td width="30%" align="middle"> More Info </td>
				<td><input type="password" name="password"/></td>
			</tr>
			
		</table><br />
		
		<table border=0>
			
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Submit"/></td>
			</tr>
		</table>
		</form>
		</center><br /><br />
		
		
		<p1> Links to: </p1>
				<br />
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment2_1.html">assignment2_1.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment2_2.html">assignment2_2.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment3_1.html">assignment3_1.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment3_2.html">assignment3_2.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment4.html">assignment4.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment5_1.html">assignment5_1.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment5_2.html">assignment5_2.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment6.html">assignment6.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment7.php">assignment7.php</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/Conways_GOL.html">Conways_GOL.html</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment8.php">assignment8.php</a></b></li>
    		<li><b><a href="http://codd.cs.gsu.edu/~bher1/assignment9.xml">assignment9.xml</a></b></li>
    			<br />
		<p2> Click <a href="https://validator.w3.org">Here</a> to
		validate my XHTML. </p2>
	</body>
</html>