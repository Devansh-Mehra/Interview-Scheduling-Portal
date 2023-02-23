<?php
  // Connect to the MySQL database
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "interview";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Update the interview details in the database
  $id = $_POST['id'];
  $participants = $_POST['participants'];
  $start_time = $_POST['start_time'];
  $end_time = $_POST['end_time'];

  $sql = "UPDATE participant SET participants='$participants', start_time='$start_time', end_time='$end_time' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
      echo "Interview details updated successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database
  $conn->close();
?>
