<?php
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');

if(!$conn)
{
	die("Connection Unsucceful".mysql_error());
}
$id=$_POST['id'];
$old_pass=$_POST['oldpass'];
$new_pass=$_POST['newpass'];



$sql = "UPDATE staff SET password='$new_pass' WHERE id='$id' AND password='$old_pass';";
$res = mysql_query($sql);

if(mysql_affected_rows($res)>0)
{
	die("Content Mismatch");
}
else
{
	echo "<script>alert('changed successfull ');</script>";
	header("location:managment.php");
}
?>