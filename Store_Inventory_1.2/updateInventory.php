<!DOCTYPE html>
<html>
<head>
    <title>UPDATE Inventory Database</title>
</head>
<body style="background-color: rgb(229,243,247);">
<h3>UPDATING inventory in the database</h3>
<h4>Programming by Saurabh Chawla</h4><br />
<?php
require_once('includes/bootstrap.php');
// Trim the incoming data.
$title = trim($_POST['Title']);
$director = trim($_POST['Director']);
$movie = Movie::find($dbc,$title);
$movie->setDirector($director);
$result=$movie->update($dbc);
if ($result) {
	echo "The UPDATE query was successful.";
} else {
	echo "The UPDATE query FAILED!";
}

?>
</body>
</html>