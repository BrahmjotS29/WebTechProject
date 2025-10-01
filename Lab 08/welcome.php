<?php
// Start the session so we can access session variables
session_start();

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    echo "<h1>Welcome, " . $_SESSION['user'] . "!</h1>";
    echo "<p>You have successfully logged in.</p>";
    echo "<a href='login.html'>Logout</a>"; // simple link to go back to login
} else {
    // If no session, send them back to login page
    header("Location: login.html");
    exit();
}
?>