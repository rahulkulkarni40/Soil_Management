<?php

$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM menure WHERE cropname='".$_GET['cropname']."'";
$result=mysqli_query($con,$sql);
echo"<html>";

echo"<body <body background='images/i1.jpg'><center>";
echo"<table border='1' cellspacing='0' cellpadding='5'>";
echo'<script type="text/javascript">';
echo'p{align:"center" color:#FEF0DB;};';
echo'</script>';
echo"<center>";
echo "<th><p><font color='white'>Crop name.</th><th><font color='white'>When to use</th><th><font color='white'>Menure type</th><th><font color='white'>Quantity</th></p><th><font color='white'>Menure type1</th><th><font color='white'>Quantity1</th><th><font color='white'>When to use</th><th><font color='white'>Menure type</th><th><font color='white'>Quantity</th></p><th><font color='white'>Menure type1</th><th><font color='white'>Quantity1</th></font></p>";
	while($row = mysqli_fetch_array($result))
{
	$cono=$row['cropname'];
    $ml=$row['p'];	
	$mn=$row['menurename'];
	$qt=$row['quantity'];
	$mn1=$row['menurename1'];
	$qt1=$row['quantity1'];
	$pl=$row['m'];
	$mn2=$row['menurename2'];
	$qt2=$row['quantity2'];
	$mn3=$row['menurename3'];
	$qt3=$row['quantity3'];
	//echo"<font color='#FEF0DB'>";
			echo"<tr><td><p><font color='white'><center>".$cono."</center></p></td><td><font color='white'>".$ml."</td><td><font color='white'>".$mn."</td><td><font color='white'>".$qt."</td><td><font color='white'>".$mn1."</td><td><font color='white'>".$qt1."</td><td><font color='white'>".$pl."</td><td><font color='white'>".$mn2."</td><td><font color='white'>".$qt2."</td><td><font color='white'>".$mn3."</td><td><font color='white'>".$qt3."</td>";
	}
      echo"</tr>";
		 echo"</table>";
echo"</center>";
		 echo"</center></body></font></html>";
?>
