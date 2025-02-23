<?php
// action_page.php

// Start the session to use session variables (optional if you want to store user data)
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the form data
    $username = htmlspecialchars(trim($_POST['uname']));  // Sanitize and trim the username
    $password = htmlspecialchars(trim($_POST['psw']));    // Sanitize and trim the password

    // Example: Dummy login validation (Replace with a real database check)
    $stored_username = 'admin';
    $stored_password = 'admin123';  // In a real app, hash passwords and use secure storage

    // Validate username and password (for demo purposes)
    if ($username === $admin && $password === $admin123) {
        // Set a session variable or redirect to a different page on successful login
        $_SESSION['username'] = $username;  // Store username in session

        echo "Login successful! Welcome, " . $username . ".";
        // Redirect after successful login
        header("Location: welcome.php");  // You can redirect to a welcome page
        exit(); // Ensure no further code execution after redirection
    } else {
        // Invalid username or password
        echo "Invalid username or password. Please try again.";
    }
}
?>
