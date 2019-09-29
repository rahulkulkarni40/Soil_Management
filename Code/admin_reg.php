<?php 
$con=mysqli_connect("localhost","root","","project");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}
$sql="insert into alog(username,password,id,email,contact)values('".$_POST['name']."','".$_POST['password']."','".$_POST['id']."','".$_POST['email']."','".$_POST['phone']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('registered successfully!');</script>";
		echo "<script>window.location = 'no-sidebar.html';</script>";
	}
	mysqli_close($con);
?>