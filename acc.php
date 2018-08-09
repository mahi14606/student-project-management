<html>
<head>

<title>PROJECT: HOME</title>
    <link rel="stylesheet" href="style.css">
<script type="text/javascript">

function validate()
{
if(document.myForm.user.value == "")
               {
alert("Please Enter your available username");
document.myForm.user.focus();
return false;
               }        
if(document.myForm.oldpass.value == "")
               {
alert("Please Enter your privious Password");
document.myForm.oldpass.focus();
return false;
               }
if(document.myForm.newpass.value == ""  || document.myForm.newpass.value.length !=5 ) 
               {
alert("Please Enter new Password");
document.myForm.newpass.focus();
return false;
               }
alert(" Account updated with new password");
return true;
     

}
</script>
</head>
<body class="grad">
<center>
<h1 style="font-size: 45px; font-family:monospace">PROJECT MANAGEMENT</h1>
</center>
<center>
<form action="pcc.php"  method="POST" name="myForm"  onsubmit="return(validate());">
<table style="align-content: center" width=51%>
    
    <tr>
        <td colspan=2 align=left><h1 style="font-family: monospace; color: burlywood">Change Password >> </h1> </td>
    </tr>
<tr>
    
    
    <td width=12% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">ID: </label></td>
    <td width=30%><input type="text" size="20" name="id"></td>
</tr>
<tr>
    
    <td width=12% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">Old Password:</label></td>
    <td width=30%><input type="password" size="20"  name="oldpass"></td>
</tr>
<tr>
    
    <td width=12% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">New Password:</label></td>
    <td width=30%><input type="password" size="20"  name="newpass"></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" class="buttons" onclick="" value="Submit">
    
    <input type="button" class="buttonc" onclick="really()" value="CANCEL">
</td>
    
</td>
</tr>
</table>
</form>
</center>
    
</body>
</html>
