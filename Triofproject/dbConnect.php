<?php 
$host="localhost";
$dbname='Triofproject';
$username='root';
$password='';

$pdo=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $title = $_POST["title"];
//     $content = $_POST["content"];

//     // Insert data into the database
//     $sql = "INSERT INTO stories (title, content) VALUES ('$title', '$content')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Story created successfully!";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// $conn->close()

?>

<?php
// Connect to the database
// $conn = mysqli_connect("host", "username", "password", "Triofproject");

// Query the database for book information
$sql = "SELECT title, author, description FROM books WHERE id = 1";
$result = mysqli_query($conn, $sql);

// Fetch the results and display them
if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<h2>{$row['title']}</h2>";
    echo "<p>{$row['author']}</p>";
    echo "<p>{$row['description']}</p>";
} else {
    echo "Error fetching book information.";
}

mysqli_close($conn);
?>