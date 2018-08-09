<html>
<style>
</style>
<head>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysql_error());	
}

$sql = 'SELECT * FROM staff ORDER BY id DESC LIMIT 1;';
		
$query = mysql_query($sql);


?>
<title>PROJECT MANAGEMENT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="grad">
<center>
<h1 style="font-size: 45px; font-family:monospace">PROJECT MANAGEMENT</h1>
</center>   

<h2 style="font-size: 28px; font-family:monospace; color: bisque">Your Details->></h2>

</table>

	<table class="data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				
                 <th>PASSWORD</th>
				<th>EMAIL</th>	
				

			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysql_fetch_array($query))
			{		echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['password'].'</td>
					<td>'.$row['email'].'</td>
					</tr>';
			}
		?>
		</tbody>		
	</table>
<center>
<a href="login.php"><input type="button" class="buttonl" value="Login to Account"></a>
</center>
</body>



</html>