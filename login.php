<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo 'Username: ' . htmlspecialchars($username) . '<br>';
    echo 'Password: ' . htmlspecialchars($password) . '<br>';
    
    // Validate and redirect
    if ($username === 'user' && $password === 'pass') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: https://www.amazon.com/Simple-Joys-Carters-Short-Sleeve-Bodysuit/dp/B07GY1RRZF');
        exit;
    } else {
        echo 'Invalid username or password.';
    }
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method Not Allowed";
}
?>
