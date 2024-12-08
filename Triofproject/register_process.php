<?php
// // Connect to database
// $conn = mysqli_connect("localhost", "username", "password", "triofproject");

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Retrieve form data
// $username = $_POST['username'];
// $password = $_POST['password'];

// // Hash the password (for security)
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// // Check if user exists in the database
// $sql = "SELECT * FROM users WHERE username='$username'";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     if (password_verify($password, $row['password'])) {
//         // Login successful
//         session_start();
//         $_SESSION['user_id'] = $row['id'];
//         header("Location: dashboard.php");
//         exit();
//     } else {
//         // Incorrect password
//         echo "Incorrect password.";
//     }
// } else {
//     // User not found
//     echo "User not found.";
// }

// mysqli_close($conn);
?>