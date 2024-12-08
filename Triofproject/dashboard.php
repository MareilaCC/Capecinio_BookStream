<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: welcome.php");
    exit();
}

// Fetch user details from the database
// ...

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $user['username']; ?>!</h1>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>