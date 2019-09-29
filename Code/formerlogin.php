<?php 
session_start();

$username=$_POST['frid'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','project');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql ="SELECT formerid,password FROM form WHERE formerid='".$_POST['frid']."' ";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 1) 
	{
	}else
	{
	echo "<script>alert('Invalid username/Password');</script>";
	echo'<script>window.location="formerlogin.html"</script>';
	}
	while($row = mysqli_fetch_array($result))
	{
	if($row['formerid']==$username && $row['password']==$password)
	{
		$_SESSION['id']=$username;
	echo'<script>window.location="farmer.html"</script>';
	}
	else
	{
	echo"<script>alert('Invalid username / password ');</script>";
	echo'<script>window.location="formerlogin.html"</script>';
	}
}
	mysqli_close($con);
?>

