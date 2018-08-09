<html>

<style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
</style>
<head>
<title>PROJECT MANAGEMENT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="grad">
<center>
<h1 style="font-size: 45px; font-family:monospace">PROJECT MANAGEMENT</h1>
</center>   
<a href="login.php"><input type="button" class="buttonl" value="Sign Out" onclick="home.php"></a>
<table width="100%">
  <tr>
    <td width="30%">

 <ul style="list-style-type:square; font-family: monospace; color: aliceblue; font-size: 20px;"  >
     <li><input type="button"class="list" value="Project">
     <br>
         <ul style="list-style-type:inherit">
         <li><a href="new.php"><input type="button" class="list" value="Create New Project"></a> </li>
                <li><a href="addstd.php"><input type="button" class="list" value="Add Student to Project"></a></li>
        
         <li><a href="old.php"><input type="button" class="list" value="Update Status of Project"></a></li></ul>
     </li>
  <li><a href="acc.php"><input type="button" class="list" value="Change Password"></a></li>    
</ul>
</td>
<td width="70%" align="center">
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password

$conn =mysql_connect('localhost','root','');
mysql_select_db('project');
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysql_error());   
}
session_start();

$id1=$_SESSION['id'];
$sql = "SELECT * FROM projects where STAFF_ID='$id1';";
        
$query = mysql_query($sql);
?>
<table class="data-table" border="1">
        <caption class="title">Projects</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>TOPIC</th>
                <th>START_DATE</th>
                <th>ESTIMATION_COST</th>
            
                

            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysql_fetch_array($query))
        {
    
            echo '<tr>
            <td>'.$row['ID'].'</td>
                    <td>'.$row['TOPIC'].'</td>
                    <td>'.$row['START_DATE'].'</td>
                    <td>'.$row['ESTIMATION_COST'].'</td>
                    
                </tr>';
            
        }?>
        </tbody>
        
    </table>
</td>
</tr>
</table>
</body>
</html>
