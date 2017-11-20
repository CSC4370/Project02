<?php
 include("check.php"); 
?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet"
		href="userEdit.css">

		
	</head>
 
	<body>

		<div class = containers>


		<a href="logout.php" style="font-size:18px">Logout?</a> | 
			
		<a href="userSearch.php" style="font-size:18px">Search</a> | 
			
		<a href='userHome.php'>Home Page</a>
		
		<br><br>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		<h1 class="hello">Hello, <em><?php echo $user_check;?>!</em></h1>


		<?php
			$status = "";
               
			if(isset($_POST['new']) && $_POST['new']==1) {

				$id = $_REQUEST['id'];
				$username = $_REQUEST['username'];
                $firstname = $_REQUEST['firstname'];
                $lastname = $_REQUEST['lastname'];
				$middlename = $_REQUEST['middlename'];
				$gender = $_REQUEST['gender'];
				$sport = $_REQUEST['sport'];
                $moreinfo = $_REQUEST['moreinfo'];
                $classification = $_REQUEST['classification'];

				$update = "UPDATE users SET username='".$username."',
		                firstname ='".$firstname."',
                        lastname ='".$lastname."',
                        middlename ='".$middlename."',
                        gender ='".$gender."',
                        sport ='".$sport."',
                        classification ='".$classification."',
                        moreinfo ='".$moreinfo."'
		                
		                WHERE id ='".$id."'";
               
				mysqli_query($db, $update);
				$status = "Record Updated Successfully. Please Logout & Log Back In.</br></br>";
		
			}
            
            $id = $_REQUEST['id'];
			$query = "SELECT * from users where id ='".$id."'"; 
			$result = mysqli_query($db, $query) or die ( mysqli_error());
			$row = mysqli_fetch_assoc($result);    
		?>
		
		
		<div align="center">
        	<h1>Update Record</h1>
                <p style="color:#FF0000;"><?php echo $status;?></p>
				<form name="form" method="post" action="">
		
				<input type="hidden" name="new" value="1" />
				<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
		
				<label>User Name</label> 
					<p><input type="text" name="username" placeholder="Enter User Name" 
					required value="<?php echo $row['username'];?>" /></p>
		
				<label>First Name</label> 
                	<p><input type="text" name="firstname" placeholder="Enter First Name" 
					required value="<?php echo $row['firstname'];?>" /></p>
		
				<label>Last Name</label> 
                	<p><input type="text" name="lastname" placeholder="Enter Last Name" 
					required value="<?php echo $row['lastname'];?>" /></p>
		
				<label>Middle Name</label> 
                	<p><input type="text" name="middlename" placeholder="Enter Middle Name" 
					required value="<?php echo $row['middlename'];?>" /></p>
		
				<label>Gender</label> 
					<p><select name="gender" placeholder="Enter Gender" 
					required value="<?php echo $row['gender'];?>" />
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select></p>
			
				<label>Sport</label> 
					<p><input type="text" name="sport" placeholder="Enter sport" 
					required value="<?php echo $row['sport'];?>" /></p>
		
				<label>Classification</label> 
					<p><select name="classification" placeholder="Enter classification" 
					required value="<?php echo $row['classification'];?>">
						<option></option>
						<option>Athlete</option>
						<option>Coach</option>
					</select></p>
		
				<label>More Info</label> 
                	<p><input type="text" name="moreinfo" placeholder="Enter More Info" 
					required value="<?php echo $row['moreinfo'];?>" /></p>
					

					<p><input name="submit" type="submit" value="Update" /></p>
				</form>
		
	</body>
</html>
