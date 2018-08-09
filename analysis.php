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
	if (!$conn) 
	{
		die ('Failed to connect to MySQL: ' . mysql_error());	
	}
	
?>
<title>RESULT</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="grad">
<center>
<h1 style="font-size: 45px; font-family:monospace">ANALYSIS</h1>
</center>   
<h2 style="font-size: 28px; font-family:monospace; color: bisque">Staff Details: </h2>
</table>
	<table class="data-table">
		<thead>
			<tr>
				<th>STAFF ID</th>
				<th>NAME</th>				
                 <th>E-Mail</th>
                 <th>PASSWORD</th>
			</tr>
		</thead>
		<tbody>
		<?php
	$sql = 'SELECT * FROM staff ';
	$query = mysql_query($sql);

		while($row = mysql_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['password'].'</td>
					</tr>';
		}
				
		?>
		</tbody>		

	</table>
	<br>

<h2 style="font-size: 28px; font-family:monospace; color: bisque">Completed Projects</h2>
</table>
	<table class="data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>TOPIC</th>				
                 <th>STAFF ID</th>
                 <th>START DATE</th>
                 <th>END DATE</th>
                 <th>ESTIMATION COST</th>
                 <th>ACTUAL COST</th>
			</tr>
		</thead>
		<tbody>
		<?php
	$sql = 'SELECT * FROM projects where STATUS=1';
	$query = mysql_query($sql);

		while($row = mysql_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['ID'].'</td>
					<td>'.$row['TOPIC'].'</td>
					<td>'.$row['STAFF_ID'].'</td>
					<td>'.$row['START_DATE'].'</td>
					<td>'.$row['END_DATE'].'</td>
					<td>'.$row['ESTIMATION_COST'].'</td>
					<td>'.$row['ACTUAL_COST'].'</td>
					</tr>';
		}
					
		?>
		</tbody>		

	</table>



	<h2 style="font-size: 28px; font-family:monospace; color: bisque">Running Projects: </h2>
	<table class="data-table">
		<thead>
			<tr>
				<th>PROJECT ID</th>
				<th>TOPIC NAME</th>				
                 <th>STAFF ID</th>
                 <th>START DATE</th>
			</tr>
		</thead>
		<tbody>
		<?php

	$sql1 = 'SELECT * FROM projects where STATUS=0';
	$query1 = mysql_query($sql1);

		while($row1 = mysql_fetch_array($query1))
		{
			echo '<tr>
					<td>'.$row1['ID'].'</td>
					<td>'.$row1['TOPIC'].'</td>
					<td>'.$row1['STAFF_ID'].'</td>
					<td>'.$row1['START_DATE'].'</td>
					</tr>';
		}			
		?>
		</tbody>		

	</table>



<center>
	<br>
<a href="admin1.php"><input type="button" class="buttonl" value="OKAY"></a>
</center>
</body>



</html>