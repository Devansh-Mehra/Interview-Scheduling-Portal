<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Interview</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Update Interview</h1>
		<form method="post" action="update_interview.php">
			<label for="participants">Participants:</label>
			<input type="text" id="participants" name="participants"><br>

			<label for="start-time">Start Time:</label>
			<input type="datetime-local" id="start-time" name="start-time"><br>

			<label for="end-time">End Time:</label>
			<input type="datetime-local" id="end-time" name="end-time"><br>

			<input type="submit" value="Create">
		</form>
	</div>
</body>
</html>
