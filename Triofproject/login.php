// login.php
<?php
// Database connection
$conn = mysqli_connect("your_hostname", "your_username", "your_password", "triofproject");

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... your login logic here ...
}

mysqli_close($conn);
?>

// register.php
<?php
// Database connection
$conn = mysqli_connect("your_hostname", "your_username", "your_password", "triofproject");

// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... your registration logic here ...
}

mysqli_close($conn);
?>