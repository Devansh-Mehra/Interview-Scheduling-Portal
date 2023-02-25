<?php
// Connect to the database
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'interview';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the values from the form
    $id = $_POST['id'];
    $participants = $_POST['participants'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    // Update the entry in the database
    $sql = "UPDATE participant SET participants='$participants', start_time='$start_time', end_time='$end_time' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Get the id of the entry to edit
$id = $_GET['id'];

// Retrieve the entry from the database
$sql = "SELECT * FROM participant WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output the form with the values pre-filled
    $row = mysqli_fetch_assoc($result);
?>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        participants: <input type="text" name="participants" value="<?php echo $row['participants']; ?>"><br>
        start_time: <input type="datetime-local" name="start_time" value="<?php echo $row['start_time']; ?>"><br>
        end_time: <input type="datetime-local" name="end_time" value="<?php echo $row['end_time']; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
<?php
} else {
    echo "Entry not found";
}

// Close the database connection
mysqli_close($conn);
?>
