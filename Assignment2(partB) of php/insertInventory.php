<!DOCTYPE html>
<html>
<head>
    <title>Insert Inventory</title>
</head>

<body style="background-color: rgb(229,243,247);">
<?php

// Set the variables for the database access
require_once('includes/bootstrap.php');
$title = trim($_POST['Title']);
$productionCompany = trim($_POST['ProductionCompany']);
$yearReleased = trim($_POST['YearReleased']);
$director = trim($_POST['Director']);
$newMovie = new Movie(0, $title, $productionCompany, $yearReleased, $director);
$result = $newMovie->create($dbc);
if ($result) {
	echo "The query was successfully executed!";
} else {
	echo "The query could not be executed!";
}
?>
</body>
</html>
