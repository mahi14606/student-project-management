<?php
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');

if(!$conn)
{
	die("Connection Unsucceful".mysql_error());
}

$uname = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM `admin_login` where username = '$uname' and password = '$pass';";

$res = mysql_query($sql);

if(mysql_fetch_row($res)==0)
{
	die("Admin not exist");
}
else
{
	echo "<script>alert('Admin Login Successfull ');</script>";
	header("location:admin1.php");
}
?>