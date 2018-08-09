<?php
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');

if(!$conn)
{
	die("Connection Unsucceful".mysql_error());
}
$prj_id=$_POST['ID'];
$cost=$_POST['a_cost'];
session_start();
$_SESSION['id10']=$prj_id;
$sql = "UPDATE projects SET STATUS=1,ACTUAL_COST='$cost',END_DATE=now() WHERE ID='$prj_id'";
$res = mysql_query($sql);

if(mysql_fetch_row(($res)==0))
{
	die("update not sucessfull");
}
else
{
	echo "<script>alert('update successfull ');</script>";
	header("location:marks.php");
}
?>