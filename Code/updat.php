<?php
$con=mysqli_connect('localhost','root','','project');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update form set contact='$_POST[ph]',email='$_POST[email]' where formerid='".$_POST['rn']."'";
	$result=mysqli_query($con,$sql);
	echo'<script type="text/javascript">';
	echo'alert("Account has been successfully Updated")';
	echo'</script>';
	echo'<script>window.location="no-sidebar.html"</script>';

mysqli_close($con);
?> 