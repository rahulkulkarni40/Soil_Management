<?php 
$con=mysqli_connect("localhost","root","","project");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}

$passs1 = $_POST['pwd'];
$passs2 = $_POST['pwd1'];


if($passs1==$passs2 )
{
	$sql="insert into shop(firstname,lastname,address,contact,email,password,shopid)values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['add']."','".$_POST['con']."','".$_POST['email']."','".$_POST['pwd']."','".$_POST['shopid']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('registered successfully!');</script>";
		echo "<script>window.location = 'no-sidebar.html';</script>";
	}
}

else
{
	print "<script type=\"text/javascript\">"; 
	print "alert('The both passwords you have entered do not match!! ')"; 
	print "</script>"; 
	echo '<script>history.go(-1); </script>';
	
}
mysqli_close($con);
?>
