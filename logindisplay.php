<?php
session_start(); // Start the session

$isLogin = false;
$usernames = [];
$passwords = [];

$file = fopen("password.txt", "r");
if ($file) {
    while (!feof($file)) {
        $fileUsername = trim(fgets($file));
        $filePassword = trim(fgets($file));
        if (!empty($fileUsername) && !empty($filePassword)) {
            $usernames[] = $fileUsername;
            $passwords[] = $filePassword;
        }
    }
    fclose($file);
} else {
    echo "Error: Unable to open the password file.";
}

function searchArrays($username, $password, $usernames, $passwords) {
    global $isLogin;
    foreach ($usernames as $index => $storedUsername) {
        if ($storedUsername === $username && $passwords[$index] === $password) {
            $isLogin = true;
            break;
        }
    }
}

function isUsernameTaken($username, $usernames) {
    return in_array($username, $usernames);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    if (!empty($username) && !empty($password)) {
        if (isset($_POST["login"])) {
            searchArrays($username, $password, $usernames, $passwords);
            if ($isLogin) {
                $_SESSION['isLogin'] = true;
                setcookie("username", $username, time() + (30 * 24 * 60 * 60)); // 30-day cookie
                echo "Login successful!";
            } else {
                $_SESSION['isLogin'] = false;
                echo "Invalid username or password.";
            }
        }

        if (isset($_POST["create"])) {
            if (!isUsernameTaken($username, $usernames)) {
                file_put_contents("password.txt", $username . PHP_EOL . $password . PHP_EOL, FILE_APPEND);
                setcookie("username", $username, time() + (30 * 24 * 60 * 60)); // 30-day cookie
                echo "Account created successfully!";
            } else {
                echo "Username already exists. Please choose another.";
            }
        }
    } else {
        echo "Please fill out all fields.";
    }
}


