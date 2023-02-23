<!DOCTYPE html>
<html>
<head>
	<title>Interview Details</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Interview Details</h1>

	<?php
		// Connect to the MySQL database
		$host = '127.0.0.1';
		$username = 'root';
		$password = '';
		$dbname = 'interview';

		$conn = new mysqli($host, $username, $password, $dbname);

		// Check the connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Retrieve the interview details from the database
		$sql = "SELECT * FROM participant";
		$result = $conn->query($sql);

		// Display the interview details in an HTML table
		if ($result->num_rows > 0) {
			echo "<table>";
			echo "<tr><th>ID</th><th>Participants</th><th>Start Time</th><th>End Time</th><th>Edit</th></tr>";
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['participants'] . "</td>";
				echo "<td>" . $row['start_time'] . "</td>";
				echo "<td>" . $row['end_time'] . "</td>";
				echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "No interviews found.";
		}

		// Close the database
		$conn->close();
	?>
</body>
</html>
