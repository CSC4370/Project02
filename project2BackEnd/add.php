<?php
 include("check.php"); 
?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet"
		href="adminAdd.css">

		
	</head>
 
	<body>

		<div class = containers>
		<a href="logout.php" style="font-size:18px">Logout?</a> | 
		<a href="adminSearch.php" style="font-size:18px">Search</a> | 
		<a href='adminHome.php'>Home Page</a>
		
		<br /><br />
		<br /><br /><br /><br />
		<br /><br /><br /><br />
		<br /><br /><br /><br />
		<h1 class="hello">Hello, <em><?php echo $admin_check;?>!</em></h1>


		<?php
			$status = "";
               
			if(isset($_POST['new']) && $_POST['new']==1) {

				$username = $_REQUEST['username'];
            	$firstname = $_REQUEST['firstname'];
            	$password = $_REQUEST['password'];
            	$lastname = $_REQUEST['lastname'];
				$middlename = $_REQUEST['middlename'];
				$gender = $_REQUEST['gender'];
				$sport = $_REQUEST['sport'];
            	$moreinfo = $_REQUEST['moreinfo'];
            	$classification = $_REQUEST['classification'];



				$insert="INSERT INTO users SET username='".$username."',
		        	password = '".$password."',
		        	firstname = '".$firstname."',
                    lastname = '".$lastname."',
                    middlename = '".$middlename."',
                    gender = '".$gender."',
                    sport = '".$sport."',
                    classification = '".$classification."',
                    moreinfo ='".$moreinfo."'";
                    
            	//echo $insert;
				mysqli_query($db,$insert);
				$status = "New Record Inserted Successfully. </br></br>";
		
			}        
		?>
		
		<div align="center">
        <h2>Add Record</h2><br>
        <p style="color:#FF0000;"><?php echo $status;?></p>
        	
		<form name="form" method="post" action=""> 
		<input type="hidden" name="new" value="1" />
		
		<label>User Name</label>
			<p><input type="text" name="username" placeholder="Enter User Name" 
			required value="" /></p>
			
		<label>Password</label>
			<p><input type="password" name="password" placeholder="Enter New Password" 
			required value="" /></p>
        
        <label>First Name</label>
        	<p><input type="text" name="firstname" placeholder="Enter First Name" 
			required value="" /></p>
        
        <label>Last Name</label>
        	<p><input type="text" name="lastname" placeholder="Enter Last Name" 
			required value="" /></p>
        
        <label>Middle Name</label>
        	<p><input type="text" name="middlename" placeholder="Enter Middle Name" 
			required value="" /></p>
		
		<label>Gender</label>
			<p><select name="gender" placeholder="Enter Gender" 
					required value="<?php echo $row['gender'];?>" />
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select></p>
		
		<label>Sport</label>
			<p><input type="text" name="sport" placeholder="Enter sport" 
			required value="" /></p>
		
		<label>Classification</label>
			<p><select name="classification" placeholder="Enter classification" 
					required value="<?php echo $row['classification'];?>">
						<option></option>
						<option>Athlete</option>
						<option>Coach</option>
					</select></p>
		
		<label>More Info</label>
        	<p><input type="text" name="moreinfo" placeholder="Enter More Info" 
			required value="" /></p><br />
		
			<p><input name="submit" type="submit" value="Add New Record" /></p>
			
		</form>
		
	</body>
</html>
