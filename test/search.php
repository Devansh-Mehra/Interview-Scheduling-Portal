<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Search Results</h1>
    <?php
    // Database connection parameters
    $host = '127.0.0.1';
    $user = "root";
    $password = '';
    $dbname = 'interview';

    // Create connection
    $conn = new mysqli($host, $user, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve name from form data
    $name = $_POST['name'];
    
    // Prepare and execute SQL query
    $sql = "SELECT * FROM participant WHERE participants = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["participants"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Start Time: " . $row["start_time"]. "<br>";
        echo "End Time: " . $row["end_time"]. "<br>";
        // Output other columns as needed
      }
    } else {
      echo "No results found.";
    }

    // Close connection
    $conn->close();
    ?>
  </div>
</body>
</html>
