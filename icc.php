<?php
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');

if(!$conn)
{
	die("Connection Unsucceful".mysql_error());
}

session_start();

$staffid = $_POST['id'];



$_SESSION['id']=$staffid;
$pass = $_POST['password'];

$sql = "select * from staff where id = '$staffid' and password = '$pass';";
$res = mysql_query($sql);

if(mysql_fetch_row($res)==0)
{
	die("user not exist");
}
else
{
	echo "<script>alert('Login successfull');</script>";
	$_SESSION['flag']=1;
	header("location:managment.php");
}

?>