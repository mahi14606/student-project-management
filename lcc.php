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

    $topic = $_POST['topic'];
    $_SESSION['tpc']='$topic';
    $ec=$_POST['ec'];

    $id=$_SESSION['id'];
    $sql=mysql_query("insert into projects(TOPIC, STAFF_ID,START_DATE, ESTIMATION_COST) VALUES('$topic','$id',now(),'$ec')");


    if(mysql_affected_rows($conn)>0)
    {
      echo "<script>alert('signup successfull ');</script>";
      header('location:kcc.php');
    }
    else
    {
     die("registration not sucessfull");
    
    }
    }
else
{
    echo "<script>alert('YOU MUST BE LOGGED IN');</script>";
    header('location:login.php');

}
?>