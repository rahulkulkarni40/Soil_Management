
<?php
session_start();
//Store data into session 
$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * from alog WHERE id='".$_POST['id1']."'";



$result=mysqli_query($con,$sql);


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
echo"<link rel='stylesheet' href='admin_reg_files/formoid1/formoid-flat-green.css' type='text/css' />";
echo"<script type='text/javascript' src='admin_reg_files/formoid1/jquery.min.js'></script>";
echo"<form  action ='updateadmin.php' class='formoid-flat-green' style='font-size:14px;font-family:'Lato', sans-serif;max-width:480px;min-width:150px' method='post'><div class='title'><h2>Admin registration</h2></div>";
	echo"<div class='element-input'><label class='title'>Name</label><input class='large' type='text' name='name' value='".$row['username']."'/></div>";
	echo"<div class='element-password'><label class='title'>Password</label><input class='large' type='password' name='password' value='".$row['password']."'  /></div>";
echo"	<div class='element-input'><label class='title'>Id</label><input class='large' type='text' name='id' value='".$row['id']."'/></div>";
echo"<div class='element-number' ><label class='title'>Conatct</label><input class='large' type='text' min='0' max='10000000000000000000000000000000' name='phone'  value='".$row['contact']."' /></div>";
	echo"<div class='element-email'><label class='title'>Email</label><input class='large' type='email' name='email' value='".$row['email']."' /></div>";
echo"<div class='submit'><input type='submit' value='Submit'/></div></form>";
}
mysqli_close($con);
?>