<?php
session_start(); // Start the session

// Replace these with your actual credentials check (e.g., querying a database)
$valid_username = 'user';
$valid_password = 'pass';

// Check if form data is sent via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Simple validation (replace with secure methods in production)
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Redirect to a specific page (AppMetrica or any other page)
        header('Location: https://www.amazon.com/Simple-Joys-Carters-Short-Sleeve-Bodysuit/dp/B07GY1RRZF');
        exit;
    } else {
        // Handle login failure
        echo 'Invalid username or password.';
    }
}
?>
