<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','project');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql ="SELECT username,password FROM alog WHERE username='".$_POST['username']."' ";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 1) 
	{
	}else
	{
	echo "<script>alert('Invalid username/Password');</script>";
	echo'<script>window.location="Alogin.html"</script>';
	}
	while($row = mysqli_fetch_array($result))
	{
	if($row['username']==$username && $row['password']==$password)
	{
	echo'<script> window.location="no-sidebar.html"</script>';
	}
	else
	{
	echo'<script>window.location="Alogin.html"</script>';
	}
}
	mysqli_close($con);
?>

