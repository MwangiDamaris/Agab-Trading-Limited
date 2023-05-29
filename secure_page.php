<?php
// Check if the user is authenticated or logged in
// You can use sessions or any other authentication mechanism here
// For simplicity, we are just checking if a session variable is set

session_start();

if (!isset($_SESSION["username"])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.html");
    exit();
}

// If the user is logged in, display the secure content
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Page</title>
</head>
<body>
    <h2>Welcome to the Secure Page</h2>
    <p>Hello, <?php echo $_SESSION["username"]; ?>!</p>
    <p>This is a secure page that only authenticated users can access.</p>
    
    <!-- Add your secure content here -->
</body>
</html>
