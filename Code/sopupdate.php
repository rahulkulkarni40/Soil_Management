<?php
session_start();

$con=mysqli_connect('localhost','root','','project');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update shop set password='$_POST[pwd]' where shopid='".$_POST['shopid']."'";
	$result=mysqli_query($con,$sql);
		echo'<script type="text/javascript">';
	echo'alert("Password has been successfully Changed")';
	
	echo'</script>';
	echo'<script>window.location="shopkeeper.html"</script>';


?>