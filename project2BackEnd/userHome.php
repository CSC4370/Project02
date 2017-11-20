<?php
 include("check.php"); 
?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet"
		href="userProfile.css">

		
	</head>
 
	<body>
		
		<a href="logout.php" style="font-size:18px">Logout?</a> | 
	
		<a href="userSearch.php" style="font-size:18px">Search</a>
	
		
	
		<div class = containers>
		<br>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		<h1 class="hello">Hello, <em><?php echo $user_check;?>!</em></h1>
			<br />
		
		
		
	<p><b><u>About:</u></b> A mobile sports collaboration platform. Let your talent be seen!
	With ShowSkill you can upload game highlights, view and message players and coaches. Don't
	waste the opportunity to show what you are truly worth!</p>


<?php
	
   $sql = "SELECT * FROM users WHERE username = '$user_check' ";

   $query = mysqli_query($db, $sql);

?>
	

	<table width="900px" border="1">
  		<tr>
  			<td align="center"><b>Profile List</b></td>
  		</tr>
  		
  		<tr>
    		<th width="198"> <div align="center">FirstName </div></th>
    		<th width="97"> <div align="center">LastName </div></th>
   			<th width="59"> <div align="center">MiddleName </div></th>
    		<th width="71"> <div align="center">Gender </div></th>
    		<th width="71"> <div align="center">Sport </div></th>
    		<th width="71"> <div align="center">Classification </div></th>
    		<th width="91"> <div align="center">More Info </div></th>
    		<th width="130"> <div align="center">Actions </div></th>
  		</tr>
  		
<?php while($result=mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>

  		<tr>
  			<td><div align="center"><?php echo $result["firstname"];?></div></td>
    		<td><div align="center"><?php echo $result["lastname"];?></div></td>
    		<td align="center"><?php echo $result["middlename"];?></td>
    		<td align="center"><?php echo $result["gender"];?></td>
    		<td align="center"><?php echo $result["sport"];?></td>
    		<td align="center"><?php echo $result["classification"];?></td>
    		<td align="center"><?php echo $result["moreinfo"];?></td>
    
    		<td align="center" colspan="2">
    		<a href="userEdit.php?id=<?php echo $result["id"]; ?>">Update Profile</a>
  		</tr>
  		
<?php } ?>

	</table>
	
<?php mysqli_close($conn); ?>

	</body>
</html>
