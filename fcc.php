<?php

$con = mysql_connect('localhost','root','');
mysql_select_db('project');
	if(!$con)
	{
		echo 'Not Connected to server';
		
	}
	
	if(!mysql_select_db('project'))
	{
		echo 'Database not Selected';
		
	}
	$name = $_POST['name'];
	$inmail = $_POST['email'];
	$id=$_POST['id'];
   

	$sql1 = "INSERT INTO `group`(`ID`, `NAME`, `EMAIL`) VALUES ('$id','$name','$inmail')";
	
	$sql = "SELECT * From projects where ID= $id";
	$res =mysql_query($sql);
if(mysql_fetch_row($res)==0)
{
	die("Project not exist");
}
else
{
	if(!mysql_query($sql1))
	{
		echo 'Not Inserted';
		
	}
	else
	{
		header("location:addstd.php");
	}
	
}

?>

