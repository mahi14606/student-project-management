
<html>
<? php
session_start();
if($_SESSION['flag']==0)
  header('location:login.php');
?>
<head>
<title>PROJECT: HOME</title>
    <link rel="stylesheet" href="style.css">
<script type="text/javascript">

function validate()
{

if(document.myForm.name.value == "")
               {
alert("Please Enter your  username");
document.myForm.name.focus();
return false;
               }  
if(document.myForm.email.value == "")
               {
alert("Please confirm your email");
document.myForm.email.focus();
return false;
               }
if(document.myForm.id.value == "")
               {
alert("Please confirm your email");
document.myForm.id.focus();
return false;
               }
alert("Student Record Inserted");
return true;
     }
</script>
</head>
<body class="grad">
<center>
<h1 style="font-size: 45px; font-family:monospace">PROJECT MANAGEMENT</h1>
</center>
<center>
<form action="fcc.php"   method="POST" name="myForm"  onsubmit="return(validate());">
<table style="align-content: center; font-family: monospace;  font-size: 22px; color: aliceblue" width=60%>
    
    <tr>
        <td colspan=2 align=left><h1 style="font-family: monospace; color: burlywood">Fill Student Details >> </h1> </td>
    </tr>
  <tr>
    <td width=30% align=left><label>Project ID: </label></td>
    <td width=70%><input type="number" size="40" name="id"></td>
</tr>
<tr>
    <td width=30% align=left><label>Name:</label></td>
    <td width=70%><input type="text" size="40" name="name"></td>
</tr>
  <tr>
    <td width=30% align=left><label  >Email ID: </label></td>
    <td width=70%><input type="email" size="40" name="email"></td>
</tr>   
</table>
<input type="submit" class="buttons"  onclick="" value="Add Student">
     <br> </form> 
     <h2 style="font-family: monospace;">If all students are added then press <a href="managment.php"><input type="button" class="buttonc"  value="OKAY">   </a></h2>
      
</center>

</body>
</html>
