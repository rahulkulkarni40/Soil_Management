<?php
session_start();
//Store data into session 
$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	
else
{
$sql ="SELECT * FROM form WHERE formerid='".$_POST['rn']."'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result) == 1) 
	{
	while($row = mysqli_fetch_array($result))

	{
echo"<html>";

echo"<head><style type='text/css'>";
echo"body {

text-align:centre;
margin-left:400;
width:700px;
height:720px;
align:centre;
}";
echo"</style></head>";
echo"<body background='images/i1.jpg' width=3000 height=5000>";
echo"<link rel='stylesheet' href='farmerreg_files/formoid1/formoid-metro-cyan.css' type='text/css' />";
echo"<script type='text/javascript' src='farmerreg_files/formoid1/jquery.min.js'></script>";
echo"<center>";
echo"<font color='#000000'>";
echo"<form action='updat.php'class='formoid-metro-cyan' style='background-color:;font-size:16px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;max-width:550px;min-width:150px' method='post'><div class='title'><h2>Farmer registration</h2></div>";
echo"<div class='element-name' ><label class='title'>FirstName</label><span class='large'><input  type='text' size='40' name='fn'  readonly value='".$row['firstname']."'><//></div>";
echo"<div class='element-name' ><label class='title'>LastName</label><span class='large'><input  type='text' size='40' name='ln' readonly value='".$row['lastname']."'><//></div>";
echo"<div class='element-input' ><label class='title'>Farmer Id </label><input class='large' type='text' name='rn' readonly value='".$row['formerid']."'><//></div>";
echo"<div class='element-number' ><label class='title'>Conatct</label><input class='large' type='text' min='0' max='10000000000' name='ph' value='".$row['contact']."'></ required/></div>";
echo"<div class='element-email' ><label class='title'>Email</label><input class='large' type='email' name='email'  value='".$row['email']."'></  /></div>";
    echo"<div class='submit'><input type='submit' value='Submit'/></div></form>";
	echo"<script type='text/javascript' src='formerreg_files/formoid1/formoid-flat-green.js'>";
echo"</script>";
echo"</font>";
echo"</center>";
echo"<!-- Stop Formoid form-->";
echo"</body>";
echo"</form>";
echo"</html>";
}
	}
else 
{
	echo"<script>alert('invalid User id');</script>";
	echo'<script>window.location="no-sidebar.html"</script>';
}
}
mysqli_close($con);
?>