<html>
<head>
<title>PROJECT: HOME</title>
    <link rel="stylesheet" href="style.css">
<script type="text/javascript">

function validate()
{
       
if(document.myForm.topic.value == "")
               {
alert("Please Enter topic");
document.myForm.topic.focus();
return false;
               }
if(document.myForm.ec.value == "" || isNaN(document.myForm.ec.value))
               {
alert("Please Enter valid estimated cost");
document.myForm.ec.focus();
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
<form action="lcc.php" name="myForm"   method="POST" onsubmit="return(validate());">
<table style="align-content: center; font-family: monospace;  font-size: 22px; color: aliceblue" width=60%>
    
    <tr>
        <td colspan=2 align=left><h1 style="font-family: monospace; color: burlywood">Fill Project Details >> </h1> </td>
    </tr>
<tr>
    <td width=30% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">Topic:</label></td>
    <td width=70%><input type="text" size="40" name="topic"></td>
</tr>
    
    <tr>
    <td width=30% align=left><label style="font-family: monospace;  font-size: 22px; color: aliceblue">Estimated Cost:</label></td>
    <td width=70%><input type="text" size="40"  name="ec"></td>
</tr>
  
</table>
<input type="submit" class="buttons" onclick="" value="SUBMIT">
    
    <input type="button" class="buttonc" onclick="really()" value="CANCEL">   
    </form>
</center>
</body>
</html>