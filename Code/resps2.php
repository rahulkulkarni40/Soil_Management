<?php
session_start();
$ans=$_POST['ans'];
if($ans!=' ')
{
$con=mysqli_connect('localhost','root','','project');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update response set response='$_POST[ans]' where id='".$_POST['Q_id']."'";
	$result=mysqli_query($con,$sql);
echo'<script type="text/javascript">';
	echo'alert("Than you for answering")';
	echo'</script>';
	echo'<script>window.location="shopkeeper.html"</script>';	
}
else
{
print "<script type=\"text/javascript\">"; 
	print "alert('Please answer the question!! ')"; 
	print "</script>"; 
	echo '<script>history.go(-1); </script>';
}
mysqli_close($con);
?>