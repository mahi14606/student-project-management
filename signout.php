<? php
session_start();
$_SESSION['flag']=0;
header("refresh; url='login.php'");

?>