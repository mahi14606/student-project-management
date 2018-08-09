
<html>
<style>
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
            alert("Sign In Successfull");
            return true;
        }
    </script>
</head>
<body class="grad">
<center>
<h1 style="font-size: 45px; font-family:monospace">PROJECT MANAGEMENT</h1>
</center>   

<a href="Login.php"><input type="button" class="buttonc" value="GO BACK"></a>
<h1 style="font-family:monospace; font-style: italic; color: white; text-align: center">Login with Master registered ID and Password</h1>
   
<center>
<form name="myForm"    action="hcc.php"  method="post" onsubmit="return(validate());">
<table style="align-content: center">
<tr>
    <td><label style="font-family: monospace;  font-size: 22px; color: aliceblue">ADMIN USERNAME: </label></td>
    <td></td>
    <td><input type="text" name="username"></td>
</tr>
<tr>
      <td><label style="font-family: monospace;  font-size: 22px; color: aliceblue">ADMIN PASSWORD: </label></td>
    <td></td>
        <td><input type="password" name="password" ></td>
</tr>
<tr>
  <center>
  <td ></td>
  </center>
</tr>
</table>
    <a href="signup.php"><input type="submit" class="buttons" value="ADMIN LOGIN"></a>
</form>

</center>
    

</div>
</body>
</html>
