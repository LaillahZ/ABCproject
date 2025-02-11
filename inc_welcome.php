<?php
session_start(); // Start the session to manage user authentication

// Check if the user is logged in
if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) {
    $username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : "User";
    echo "Welcome, " . $username . "!";
} else {
    echo "Please log in to continue.";
}
?>









