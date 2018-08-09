
<html>
<style>
</style>
<head>
<title>PROJECT: LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

        function validate()
        {
           if(document.myForm.first.value == "")
               {
                   alert("Please Enter Presentation Marks");
                   document.myForm.first.focus();
                   return false;
               }
               if(document.myForm.first.value > 25)
               {
                   alert("Marks should be less than 25");
                   document.myForm.first.focus();
                   return false;
               }
            if(document.myForm.second.value == "")
               {
                   alert("Please Enter Efficiency Marks");
                   document.myForm.second.focus();
                   return false;
               }
                if(document.myForm.second.value > 25)
               {
                   alert("Marks should be less than 25");
                   document.myForm.second.focus();
                   return false;
               }
            if(document.myForm.third.value == "")
               {
                   alert("Please Enter Social Use Marks");
                   document.myForm.third.focus();
                   return false;
               }
                if(document.myForm.third.value > 25)
               {
                   alert("Marks should be less than 25");
                   document.myForm.third.focus();
                   return false;
               }
            alert("Uploading Marks");
            return true;
        }
    </script>
</head>
<body class="grad">
<center>
<h1 style="font-size: 45px; font-family:monospace">PROJECT MANAGEMENT</h1>
</center>   

<hr>
<h1 style="font-family:monospace; color: lime; text-align: center ; font-size: 35px">Marks</h1><hr>
   

<form name="myForm"    action="mcc.php"  method="post" onsubmit="return(validate());">
<table>
<tr>
    <td align="right">
      <label style="font-family: monospace;  font-size: 22px; color: aliceblue">Presentation(25):</label></td>
      <td><input type="number" name="first"></td>
</tr>
<tr>
    <td align="right">
      <label style="font-family: monospace;  font-size: 22px; color: aliceblue">Efficiency(25):</label></td>
      <td><input type="number" name="second"></td>
</tr>
<tr>
    <td align="right">
      <label style="font-family: monospace;  font-size: 22px; color: aliceblue">Social Use(25):</label></td>
      <td><input type="number" name="third"></td>
</tr>

</table>
<center>
    <input type="submit" class="buttons" value="SUBMIT">
</center>
</form>


    

</div>
</body>
</html>
