<?php
session_start();
$con=mysqli_connect('localhost','root','','project');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}

if(isset($_GET['qid']))
{
	$sql ="SELECT * FROM response WHERE id='".$_GET['qid']."'";
	$result=mysqli_query($con,$sql);


	while($row = mysqli_fetch_array($result))
	{
		echo"<html>";
		echo"<head>";
		echo"<head><style type='text/css'>";
echo"body {
	text-align:center;
	margin-left:400;
  width: 700px;
  height: 720px;
  align:center;
}";
echo"</style></head>";
		echo"</head>";
		echo"<body class='blurBg-false' style='background-color:#EBEBEB'>";
		echo"<link rel='stylesheet' href='ans_files/formoid1/formoid-flat-green.css' type='text/css' />";
		echo"<script type='text/javascript' src='ans_files/formoid1/jquery.min.js'></script>";
		echo"<form action='farmer.html' class='formoid-flat-green' style='background-color:#FFFFFF;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px' method='post'>";
		echo"<div class='title'><h2>response</h2></div>";
		echo"<div class='element-input' ><label class='title'>Trasaction Id</label><input class='large' type='text' name='Q_id' value='".$row['id']."' readonly/></div>";
		echo"<div class='element-textarea' ><label class='title'>Request</label><textarea class='medium' name='question' id='question' cols='20' rows='5' value='".$row['request']."' readonly ></textarea></div>";
		echo"<script>document.getElementById('question').value='".$row['request']."';</script>";
		echo"<div class='element-textarea' ><label class='title'>Response</label><textarea class='medium' id='ans' name='ans' cols='20' rows='5' value='".$row['response']."' readonly></textarea></div>";
		echo"<script>document.getElementById('ans').value='".$row['response']."';</script>";
		echo"<div class='submit'><input type='submit' value='back'/></div></form>";

		echo"<script type='text/javascript' src='ans_files/formoid1/formoid-flat-green.js'></script>";
		echo"</body>";
		echo"</html>";
	}

}
mysqli_close($con);
?>