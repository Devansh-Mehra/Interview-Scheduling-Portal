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

// Get the form data
$id = $_POST['id'];
$participants = $_POST['participants'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$sql = "SELECT * FROM participant WHERE id='$id' AND participants='$participants' AND start_time='$start_time' AND end_time='$end_time'";
$sq = "SELECT * FROM participant WHERE id='$id' ";
$result = $conn->query($sql);
$res = $conn->query($sq);


// Validate the input fields
if (empty($id) || empty($participants) || empty($start_time) || empty($end_time)) {
	echo "<p>One or more fields are empty. Please try again.</p>";
} 

else if ($result->num_rows > 0) {
	// Interview already exists, display an error message
	echo "Error: An interview with these details already exists.";
}

else if ($res->num_rows > 0) {
	// Interview already exists, display an error message
	echo "Error: An interview with this id already exists.";
}

else {
	// Save the interview details to the database
	$sql = "INSERT INTO participant (id, participants, start_time, end_time)
			VALUES ('$id', '$participants', '$start_time', '$end_time')";

	if ($conn->query($sql) === TRUE) {
		echo "<h2>Interview Created</h2>";
		echo "<p>Participants: $participants</p>";
		echo "<p>Start Time: $start_time</p>";
		echo "<p>End Time: $end_time</p>";
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

// Close the database
