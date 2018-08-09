<?php
session_start();
if($_SESSION['flag']==1)
{
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');

if(!$conn)
{
	die("Connection Unsucessful".mysql_error());
}

$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
session_start();
$pid1=$_SESSION['id10'];
$total=$first+$second+$third;
$sql=mysql_query("insert into marks(ID,PRESENTATION,EFFECTIVENESS,SOCIAL_USE,TOTAL) VALUES('$pid1','$first','$second','$third','$total')");


if(mysql_affected_rows($conn)>0)
{
	header('location:managment.php');
}
else
{
	die("Failed");
	
}
}
else
{
	echo "<script>alert('YOU MUST BE LOGGED IN');</script>";
	header('location:login.php');

}
?>