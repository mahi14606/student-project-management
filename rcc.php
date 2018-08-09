<html>
<style>
</style>
<head>
<?php
	$db_host = 'localhost'; // Server Name
	$db_user = 'root'; // Username
	$db_pass = ''; // Password
	$conn =mysql_connect('localhost','root','');
	$id1 = $_POST['id'];
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
<h1 style="font-size: 45px; font-family:monospace">PROJECT RESULT</h1>
</center>   
<h2 style="font-size: 28px; font-family:monospace; color: bisque">Project details</h2>
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

	$sql = "SELECT * FROM projects where ID = '$id1' and STATUS=1";
	$query = mysql_query($sql);

		if($row = mysql_fetch_array($query))
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
		else{
			echo "Project Yet not completed";
		}			
		?>
		</tbody>		

	</table>
	<br>

	<h2 style="font-size: 28px; font-family:monospace; color: bisque">Result</h2>
	<table class="data-table">
		<thead>
			<tr>
				<th>EFFECTIVENESS</th>
				<th>PRESENTATION</th>				
                 <th>SOCIAL USE</th>
                 <th>TOTAL</th>
			</tr>
		</thead>
		<tbody>
		<?php

	$sql1 = "SELECT * FROM marks where ID = '$id1'";
	$query1 = mysql_query($sql1);

		if($row1 = mysql_fetch_array($query1))
		{
			echo '<tr>
					<td>'.$row1['EFFECTIVENESS'].'</td>
					<td>'.$row1['PRESENTATION'].'</td>
					<td>'.$row1['SOCIAL_USE'].'</td>
					<td>'.$row1['TOTAL'].'</td>
					</tr>';
		}
		else{
			echo "Project Yet not completed";
		}			
		?>
		</tbody>		

	</table>

<center>
	<br>
<a href="Home.php"><input type="button" class="buttonl" value="OKAY"></a>
</center>
</body>



</html>