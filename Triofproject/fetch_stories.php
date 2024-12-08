<?php
// Connect to the database
$conn = mysqli_connect('your_host', 'your_username', 'your_password', 'your_database');

// Fetch stories from the database
$sql = "SELECT * FROM stories";
$result = mysqli_query($conn, $sql);

$stories = [];
while ($row = mysqli_fetch_assoc($result)) {
    $stories[] = $row;
}

// Return the stories as JSON
header('Content-Type: application/json');
echo json_encode($stories);