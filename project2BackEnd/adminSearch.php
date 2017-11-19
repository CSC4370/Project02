<html>
	<head>
		<title>Search Records</title>

		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<style>
			div {
    			border: 0px solid black;
    			margin-top: 10px;
    			margin-bottom: 10px;
    			margin-right: 15px;
    			margin-left: 10px;
    			background-color: white;
			}
		</style>
	</head>
	
	<body>

<?php
	include("check.php");
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"])) {
		$strKeyword = $_POST["txtKeyword"];
	}
?>
	
	<div class = containers>
	
	<h1 class="hello">Hello, <em><?php echo $admin_check;?>!</em></h1>

	<a href="logout.php" style="font-size:18px">Logout?</a>
		<br><br>
	<a href="adminHome.php" style="font-size:18px">Home Page</a>
		<br><br>
	
	<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  	<table align="center" width="390" border="0">
    	<tr>
      		<th>Keyword
      			<input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      			<input type="submit" value="Search"></th>
    	</tr>
  	</table>
	</form>

<?php
	
   $sql = "SELECT * FROM users WHERE username LIKE '%".$strKeyword."%' OR firstname LIKE '%".$strKeyword."%' OR sport LIKE '%".$strKeyword."%' OR lastname LIKE '%".$strKeyword."%'  ";

   $query = mysqli_query($db,$sql);

?>
	<table width="1000" border="1">
  		<tr>
    		<th width="50"> <div align="center">UserID </div></th>
    		<th width="110"> <div align="center">UserName </div></th>
    		<th width="150"> <div align="center">FirstName </div></th>
    		<th width="97"> <div align="center">LastName </div></th>
    		<th width="59"> <div align="center">MiddleName </div></th>
    		<th width="71"> <div align="center">Gender </div></th>
    		<th width="71"> <div align="center">Sport </div></th>
    		<th width="71"> <div align="center">Classification </div></th>
    		<th width="91"> <div align="center">More Info </div></th>
  		</tr>

<?php while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
		<tr>
    		<td align="center"><div align="center"><?php echo $result["id"];?></div></td>
    		<td align="center"><?php echo $result["username"];?></td>
    		<td align="center"><?php echo $result["firstname"];?></td>
    		<td align="center"><?php echo $result["lastname"];?></td>
    		<td align="center"><?php echo $result["middlename"];?></td>
    		<td align="center"><?php echo $result["gender"];?></td>
    		<td align="center"><?php echo $result["sport"];?></td>
			<td align="center"><?php echo $result["classification"];?></td>
    		<td align="center"><?php echo $result["moreinfo"];?></td>
  		</tr>
<?php } ?>

	</table>
<?php mysqli_close($db); ?>
	</body>
</html>
