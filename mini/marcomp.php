<!DOCTYPE html>
<html>
<head>
	<title>Comparision of marks</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #d96459;
			color: white;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}

	</style>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>College</th>
			<th>Subject</th>
			<th>Marks</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","login");
		if ($conn-> connect_error){
			die("Connction failed". $conn-> connect_error);
		}
		$result = mysqli_query($conn,"select * from mar_detail");
		$rows= mysqli_num_rows($result);
			for($row=1;$row<=$rows;$row++){
				$rowv=mysqli_fetch_array($result,MYSQLI_BOTH);
	echo "<tr><td>".$rowv['Firstname']."</td>";
	echo "<td>".$rowv['College']."</td>";
	echo "<td>".$rowv['Subject']."</td>";
	echo "<td>".$rowv['Marks']."</td></tr>";
}

	
			echo "</table>";
		$conn-> close();
		?>


	</table>

</body>
</html>