<?php
session_start();
//Store data into session 
$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM shop WHERE shopid='".$_POST['id']."'";



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
echo"<link rel='stylesheet' href='shopreg_files/formoid1/formoid-flat-green.css' type='text/css' />";
echo"<script type='text/javascript' src='shopreg_files/formoid1/jquery.min.js'></script>";
echo"<center>";
echo"<font color='#000000'>";
echo"<form  action ='sopupdate.php'  class='formoid-flat-green' style='font-size:16px;font-family:'Lato', sans-serif;max-width:550px;min-width:150px' method='post'><div class='title'><h2>Shop keeper update</h2></div>";
	echo"<div class='element-input'><label class='title'>First name</label><input class='large' type='text' name='fn'readonly value='".$row['firstname']."' /></div>";
	echo"<div class='element-input'><label class='title'>Last name</label><input class='large' type='text' name='ln' readonly value='".$row['lastname']."' /></div>";
		echo"<div class='element-number' ><label class='title'>Conatct</label><input class='large' type='text' min='0' max='10000000000000000000000000000000' name='con'value='".$row['contact']."'/></div>";
	echo"<div class='element-password'><label class='title'>password</label><input class='large' type='password' name='pwd' readon value='".$row['password']."' /></div>";
	echo"<div class='element-input'><label class='title'>shope keeper id</label><input class='large' type='text' name='shopid' readonly value='".$row['shopid']."' /></div>";
echo"<div class='submit'><input type='submit' value='Submit'/></div>";
echo"</font>";
echo"</center>";
echo"</form>";
echo"<!-- Stop Formoid form-->";
echo"</body>";
echo"</html>";
}
mysqli_close($con);
?>