<?php
 include("check.php"); 
?>
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet"
		href="adminHome.css">

		
	</head>
 
	<body>

		<div class = containers>
			<a href="logout.php" style="font-size:18px">Logout?</a> | 
			<a href="adminSearch.php" style="font-size:18px">Search</a>
			
			<br /><br />
			<br /><br /><br /><br />
			<br /><br /><br /><br />
			<br /><br /><br /><br />
			<h1 class="hello">Hello, <em><?php echo $admin_check;?>!</em></h1>
				

<?php
	$sql = "SELECT * FROM users ";

	$query = mysqli_query($db,$sql);
?>

		<table width="900" border="1">
  			<tr>
  				<td align="center">Profile List</td>
  				<td align="center"><a href="add.php"><b>Insert New Record</b></a></td>
  			</tr>
  			
  			<tr>
    			<th width="70"> <div align="center">UserID </div></th>
    			<th width="120"> <div align="center">UserName </div></th>
    			<th width="120"> <div align="center">FirstName </div></th>
    			<th width="97"> <div align="center">LastName </div></th>
    			<th width="59"> <div align="center">MiddleName </div></th>
    			<th width="70"> <div align="center">Gender </div></th>
   				<th width="71"> <div align="center">Sport </div></th>
    			<th width="130"> <div align="center">Actions </div></th>
  			</tr>
  
<?php while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
  
  			<tr>
    			<td align="center"><div align="center"><?php echo $result["id"];?></div></td>
    			<td align="center"><?php echo $result["username"];?></td>
    			<td align="center"><?php echo $result["firstname"];?></td>
    			<td align="center"><div align="center"><?php echo $result["lastname"];?></div></td>
    			<td align="center"><?php echo $result["middlename"];?></td>
    			<td align="center"><?php echo $result["gender"];?></td>
    			<td align="center"><?php echo $result["sport"];?></td>
   
    			<td align="center" colspan="2">
    				<a href="adminEdit.php?id=<?php echo $result["id"]; ?>">Edit</a>&nbsp;|  
    				<a href="delete.php?id=<?php echo $result["id"]; ?>">Delete</a></td>
  			</tr>
  
<?php } ?>

</table>
</div>

<?php mysqli_close($conn); ?>

</body>
</html>
