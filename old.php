<html>
<head>
<title>PROJECT: HOME</title>
    <link rel="stylesheet" href="style.css">
<script type="text/javascript">

function validate()
{
if(document.myForm.ID.value == "")
               {
alert("Please Enter provide your project id");
document.myForm.ID.focus();
return false;
               } 
if(document.myForm.stu_ID.value == "")
               {
alert("Please Enter provide your student id");
document.myForm.stu_ID.focus();
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
<center>
    <form action="bcc.php"  method="POST" name="myForm"  onsubmit="return(validate());">
    <br><br>
    
<table style="align-content: center; font-family: monospace;  font-size: 22px; color: aliceblue" width=60%>
    
    <tr>
        <td colspan=2 align=left><h1 style="font-family: monospace; color: burlywood; font-size: 28px">Update Project Details >> </h1> </td>
    </tr>
<tr>
    <td width=30% align=left><label>Project ID:</label></td>
    <td width=70%><input type="text" size="40" name="ID"></td>
</tr>
<tr>
    <td width=30% align=left><label>Actual Cost</label></td>
    <td width=70%><input type="text" size="40" name="a_cost"></td>
</tr>
  
</table>
<input type="submit" class="buttons"  value="SUBMIT">
</form>
</center>
    
    <br>
</body>
</html>
