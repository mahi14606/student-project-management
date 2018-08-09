<html>
<style>
</style>
<head>
<title>PROJECT: LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
               function validate()
        {
           if(document.myForm.id.value == "")
               {
                   alert("Please Enter Project ID");
                   document.myForm.id.focus();
                   return false;
               }
            return true;
        }
    </script>
</head>
<body class="grad">

<center>
<h1 style="font-size: 45px; font-family:monospace">RESULT</h1>
</center>   

<a href="home.php"><input type="button" class="buttonc" value="<< GO BACK"></a>
<h1 style="font-family:monospace; font-style: italic; color: white; text-align: center"></h1>   
<center>
<form name="myForm"  action="rcc.php"  method="POST" onsubmit="return(validate());">
<table style="align-content: center">
<tr>
    <td><label style="font-family: monospace;  font-size: 22px; color: aliceblue">PLEASE ENTER YOUR PROJECT ID: </label></td>
    <td></td>
    <td><input type="number" name="id"></td>
</tr>
</table>
<input type="submit" class="buttons" value="S U B M I T">s
</form>
</center>
</body>
</html>
