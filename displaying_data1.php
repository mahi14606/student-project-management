<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'employee'; // Database Name

$conn = mysql_connect($db_host, $db_user, $db_pass);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysql_error());	
}
mysql_select_db($db_name);
$sql = 'SELECT * FROM daily_root';
		
$query = mysql_query($sql);


?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">Daily route of employee</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>EMPLOYEE NAME</th>
				
                 <th>EMPLOYEE NO</th>
				<th>ADDRESS</th>
				<th>CONTACTNO</th>
				<th>joblocation</th>
				<th>designation</th>
				<th>email</th>

			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysql_fetch_array($query))
		{
	
			echo '<tr>
			<td>'.$row['ID'].'</td>
					<td>'.$row['empname'].'</td>
					<td>'.$row['empnum'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['contactno'].'</td>
					<td>'.$row['joblocation'].'</td>
					<td>'.$row['designation'].'</td>
					<td>'.$row['email'].'</td>
				</tr>';
			
		}?>
		</tbody>
		
	</table>
</body>
</html>