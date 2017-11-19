<?php
 include("check.php"); 
?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<style>
			div {
    			border: 0px solid black;
    			margin-top: 10px;
    			margin-bottom: 60px;
    			margin-right: 30px;
    			margin-left: 10px;
    			background-color: white;
			}
		</style>
	</head>
 
	<body>
	
		<div class = containers>
	
		<h1 class="hello">Hello, <em><?php echo $admin_check;?>!</em></h1>
			<br />
		<a href="logout.php" style="font-size:18px">Logout?</a>
			<br /><br />
		<a href="adminSearch.php" style="font-size:18px">Search</a>
			<br /><br />
		<a href='adminHome.php'>Home Page</a><br>


		<?php
		$status = "";
               
		if(isset($_POST['new']) && $_POST['new']==1) {

			$id = $_REQUEST['id'];
			$username = $_REQUEST['username'];
			$firstname = $_REQUEST['firstname'];
            $firstname = $_REQUEST['firstname'];
        	$lastname = $_REQUEST['lastname'];
			$middlename = $_REQUEST['middlename'];
			$gender = $_REQUEST['gender'];
			$sport = $_REQUEST['sport'];
            $moreinfo = $_REQUEST['moreinfo'];
            $classification = $_REQUEST['classification'];

			$update = "UPDATE users SET username ='".$username."',
					password = '".$password."',
		    		firstname = '".$firstname."',
                    lastname = '".$lastname."',
                    middlename = '".$middlename."',
                    gender = '".$gender."',
                    sport = '".$sport."',
                    classification = '".$classification."',
                    moreinfo = '".$moreinfo."'
		            WHERE id = '".$id."'";
               
			mysqli_query($db, $update);
			$status = "Record Updated Successfully. </br></br>";
		
		}
		
        $id=$_REQUEST['id'];
		$query = "SELECT * from users where id ='".$id."'"; 
		$result = mysqli_query($db, $query) or die ( mysqli_error());
		$row = mysqli_fetch_assoc($result);    
		?>
		
		
		<div align="center">
        	<h2>Update Record</h2><br>
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
			<p><input type="text" name="gender" placeholder="Enter Gender" 
			required value="<?php echo $row['gender'];?>" /></p>
		
		<label>Sport</label> 
			<p><input type="text" name="sport" placeholder="Enter sport" 
			required value="<?php echo $row['sport'];?>" /></p>
		
		<label>Classification</label> 
			<p><input type="text" name="classification" placeholder="Enter classification" 
			required value="<?php echo $row['classification'];?>" /></p>
		
		<label>More Info</label> 
        	<p><input type="text" name="moreinfo" placeholder="Enter More Info" 
			required value="<?php echo $row['moreinfo'];?>" /></p>


		<p><input name="submit" type="submit" value="Update" /></p>
		</form>
		<?php  ?>
	</body>
</html>
