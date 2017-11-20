<?php
include("connection.php"); //Establishing connection with our database
 $error = ""; 
 $message= "";//Variable for storing our errors.
if(isset($_POST["submit"]))
{
if(empty($_POST["username"]) || empty($_POST["firstname"]))
{
$error = "Both fields are required.";
}else{

 $firstname=$_POST['firstname'];
 $username=$_POST['username'];
 $sql="SELECT password FROM users WHERE firstname='".$firstname."' AND username='".$username."' "; 
 $result=mysqli_query($db,$sql);
 $p=mysqli_affected_rows($db);
 if($p!=0) 
 {
  $data=mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $message='Your password : '.$data['password']; 
  
 }
 else
 {
  $error = 'You entered username and mail id is not present';
 }
}
}

?>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1 class="hello">Hello, <em><?php echo $user_check;?>Guest User!</em></h1>
	<br />
	<center><a href="logout.php" style="font-size:18px">Return to Login</a></center>
		<br /><br />

<h1>Forgot Password<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User Name:</td><td><input type='text' name='username'/></td></tr>
<tr><td>Firstname:</td><td><input type='text' name='firstname'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
<div class="error"><?php echo $message;?></div>
<div class="error"><?php echo $error;?></div>
</body>
</html>