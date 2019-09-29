<?php
 
$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
session_start();

$sql ="insert into response (shopkeep,request,farmer) values('".$_POST['shop']."','".$_POST['req']."','".$_SESSION['us']."')" ;
if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Your shopkeeper will respond you shortly!');</script>";
		echo "<script>window.location = 'farmer.html';</script>";
	}
mysqli_close($con);

?>
