<?php
// Connect to the database
//$conn = mysqli_connect("localhost", "username", "password", "triofproject");

// Get the search term from the query string
$searchTerm = $_GET['q'];

// Prepare and execute the search query
$stmt = $conn->prepare("SELECT title FROM stories WHERE title LIKE ?");
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Fetch and return the results as JSON
$stories = [];
while ($row = $result->fetch_assoc()) {
    $stories[] = $row;
}

echo json_encode($stories);