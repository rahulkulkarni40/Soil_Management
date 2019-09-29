<?php 
$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
$sql="insert into menure(cropname,p,menurename,quantity,menurename1,quantity1,m,menurename2,quantity2,menurename3,quantity3)values('".$_POST['cn']."','".$_POST['p']."','".$_POST['mn']."','".$_POST['qt']."','".$_POST['mn1']."','".$_POST['qt1']."','".$_POST['m']."','".$_POST['mn2']."','".$_POST['qt2']."','".$_POST['mn3']."','".$_POST['qt3']."')";
	if(!mysqli_query($con,$sql))
	{
	echo"<script> alert('primary key violates ');</script>";
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('registered successfully!');</script>";
		echo "<script>window.location = 'no-sidebar.html';</script>";
	}

?> 