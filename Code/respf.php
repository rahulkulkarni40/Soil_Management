<?php
session_start();


$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM response WHERE farmer='".$_SESSION['id']."'";
$result=mysqli_query($con,$sql);
echo"<html>";
echo"<body background='images/img.jpg'><form method='post'><center>";
echo"<table border='1' cellspacing='0' cellpadding='5'>";
echo'<script type="text/javascript">';
echo'p{align:"center" color:orange;};';
echo'</script>';
echo"<th><p><center>Transaction Id</center></th><th>Request</th><th>View</th></p>";
	while($row = mysqli_fetch_array($result))

	{
	$id=$row['id'];
	$req=$row['request'];
		echo"</tr><tr><td><p><center>$id</center></p></td><td>".$req."</td><td><a href='req2.php?qid=".$id."' style='color:red;'>View</a></td>";
		 echo"</tr>";
	}
		 echo"</table></form>";
		 echo"<form action='farmer.html'>";
			echo"<input type='submit' value='Back'>";
		 echo"</form></center></body></html>";
?>