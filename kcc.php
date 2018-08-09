<html> 
<title>Project Info</title>
<body class="grad">

<link rel="stylesheet" href="style.css">

<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$conn =mysql_connect('localhost','root','');
mysql_select_db('project');
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysql_error());	
}

$sql = 'SELECT * FROM projects ORDER BY id DESC LIMIT 1;';
		
$query = mysql_query($sql);

?>

<h1 style=" font-family: monospace; font-size: 50px;" align="center"> Your Project Details</h1><br><br>
<h2>Remember your project ID to insert student in group</h2>
<table class="data-table" >
		<thead>
			<tr>
				<th>ID</th>
				<th>TOPIC</th>				
                <th>START DATE</th>
				<th>ESTIMATION COST</th>
			</tr>
		</thead>
		<tbody>

		<?php
		
		$row = mysql_fetch_array($query);
		
					echo '<tr>
					<td>'.$row['ID'].'</td>
					<td>'.$row['TOPIC'].'</td>
					<td>'.$row['START_DATE'].'</td>
					<td>'.$row['ESTIMATION_COST'].'</td>
					</tr>';
		?>
		</tbody>
		
	</table>
	<center>
		<br>
		<br>
	<a href="addstd.php"><input type="button"  class="buttons" value="OKAY"></a>
    </center>
</body>
</html>