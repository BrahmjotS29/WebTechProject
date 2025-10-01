<?php
// Start the session to store user data
session_start();

// Capture form input using POST
$username = $_POST['username'];
$password = $_POST['password'];


if ($username == 'Brahmjot Singh' && $password == '106010306') {
    // Store username in session variable
    $_SESSION['user'] = $username;
    
    // Redirect to welcome page
    header('Location: welcome.php');
    exit();
} else {
    // If login fails, show error and link back
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>