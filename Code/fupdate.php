<?php
session_start();
$pass1=$_POST['password'];

$con=mysqli_connect('localhost','root','','project');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update form set password='$_POST[password]' where formerid='".$_POST['rn']."'";
	$result=mysqli_query($con,$sql);
		echo'<script type="text/javascript">';
	echo'alert("Password has been successfully Changed")';
	echo'</script>';
	echo'<script>window.location="farmer.html"</script>';
?>