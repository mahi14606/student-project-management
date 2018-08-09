<?php
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');

if(!$conn)
{
	die("Connection Unsucceful".mysql_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO staff(password,name,email) VALUES ('$pass','$name','$email');";
$res = mysql_query($sql);

if(mysql_fetch_row(($res)==0))
{
	die("registration not sucessfull");
}
else
{
	echo "<script>alert('signup successfull ');</script>";
	
	header("location:displays.php");
}
?>