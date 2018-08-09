<html>
<head>
    <link rel="stylesheet" href="style.css">
<title>RAILWAY RESERVATION: HOME</title>
    <script type="text/javascript">
    

function validate()
{
if(document.myForm.name.value == "")
               {
alert("Please Enter your full  name");
document.myForm.name.focus();
return false;
               }        
if(document.myForm.email.value == "")
               {
alert("Please Enter your valid emailID");
document.myForm.email.focus();
return false;
               }
if(document.myForm.password.value == ""  || document.myForm.password.value.length <5 ) 
               {
alert("Please enter at least 5 charactes");
document.myForm.password.focus();
return false;
               }


return true;
}
    function plwait(){
            alert("Please wait while loading!!!!!")
        }
        function really(){
            alert("Do you really want to go back!!!!")
        }

    </script>
</head>
<body class="grad">
	<br>
	<br>
<h2 style="font-family: sans-serif; font-style: italic; color: white; text-align: center">Fill the following form to Sign Up</h2>
   
<center>
<form action="ecc.php"    method="post" name="myForm"  onsubmit="return(validate());">
<table style="align-content: center" >
    <hr>
    <tr><td colspan=2 align=left><h1 style="font-family: monospace; color: burlywood">Enter Your Information</h1> </td></tr>
</tr>
<tr>
    <td width=20% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">Full Name:</label></td>
    
    <td width=50%><input type="text" size="20" name="name"></td>
</tr>
    <tr>
    <td width=20% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">E-mail:</label></td>
    
    <td width=50%><input type="email" size="20" name="email"></td>
</tr>
    
    <tr>
    <td width=20% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">Password: </label></td>
    
    <td width=50%><input type="password" size="20" name="password"></td>
</tr>
</table>
   <h5>click submit to sign in</h5>
        <a href="login.php"><input type="submit" class="buttons"  value="submit"></a>
    
    <input type="button" class="buttonc" onclick="really()" value="CANCEL">
	
 
</form>
</center>
 

</body>
</html>
