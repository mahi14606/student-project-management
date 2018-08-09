<html>
<style>
<?php
session_start();
$_SESSION['flag']=0;
?>
</style>
<head>
<title>PROJECT: LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
               function validate()
        {
           if(document.myForm.username.value == "")
               {
                   alert("Please Enter Username");
                   document.myForm.username.focus();
                   return false;
               }
            if(document.myForm.password.value == "")
               {
                   alert("Please Enter Password");
                   document.myForm.username.focus();
                   return false;
               }
            return true;
        }
    </script>
</head>
<body class="grad">

<center>
<h1 style="font-size: 45px; font-family:monospace">PROJECT MANAGEMENT</h1>
</center>   

<a href="home.php"><input type="button" class="buttonc" value="<< GO BACK"></a>
<h1 style="font-family:monospace; font-style: italic; color: white; text-align: center">Login with your registered ID and Password</h1>
   
<center>
<form name="myForm"  action="icc.php"  method="POST" onsubmit="return(validate());">
<table style="align-content: center">
<tr>
    <td><label style="font-family: monospace;  font-size: 22px; color: aliceblue">Staff ID: </label></td>
    <td></td>
    <td><input type="number" name="id"></td>
</tr>
<tr>
	    <td><label style="font-family: monospace;  font-size: 22px; color: aliceblue">PASSWORD: </label></td>
    <td></td>
        <td><input type="password" name="password" ></td>
</tr>
<tr>
	<center>
	<td ></td>
	</center>
</tr>
</table>
    <a href="file:///C:/Users/hp/Desktop/12-10-2017/MINI%20PROJECT/management.php"><input type="submit" class="buttons"value="S U B M I T"></a>
</form>
    <h2>Don't Have Staff account <a href="admin.php">Click Here</a></h2> 
</center>
</body>
</html>
