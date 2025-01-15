
<?php
// Initialize a global variable to track login status
$isLogin = false;

/**
 * Function to check if the username and password exist in the file
 * @param string $username The username to search
 * @param string $password The password to match
 */
function searchPasswordFile($username, $password) {
    global $isLogin;

    // Open the file for reading
    $file = fopen("password.txt", "r");

    if ($file) {
        // Read the file line by line
        while (($line = fgets($file)) !== false) {
            $fileUsername = trim($line); // Get username from the current line
            $filePassword = trim(fgets($file)); // Get password from the next line

            // Compare the username and password
            if ($fileUsername === $username && $filePassword === $password) {
                $isLogin = true;
                break;
            }
        }
        fclose($file); // Close the file
    } else {
        echo "Error: Unable to open the password file.";
    }
}

/**
 * Function to check if a username already exists in the file
 * @param string $username The username to search for
 * @return bool True if the username exists, false otherwise
 */
function isUsernameTaken($username) {
    $file = fopen("password.txt", "r");

    if ($file) {
        while (($line = fgets($file)) !== false) {
            if (trim($line) === $username) {
                fclose($file); // Close the file if the username is found
                return true;
            }
            fgets($file); // Skip the password line
        }
        fclose($file); // Close the file after reading
    }
    return false;
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Login logic
    if (isset($_POST["login"])) {
        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        if (!empty($username) && !empty($password)) {
            searchPasswordFile($username, $password);
            echo $isLogin ? "Login successful!" : "Invalid username or password.";
        } else {
            echo "Please fill out all fields.";
        }
    }

    // Create login logic
    if (isset($_POST["create"])) {
        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        if (!empty($username) && !empty($password)) {
            if (!isUsernameTaken($username)) {
                file_put_contents("password.txt", $username . PHP_EOL . $password . PHP_EOL, FILE_APPEND);
                echo "Login created successfully!";
            } else {
                echo "Username already exists. Please choose another.";
            }
        } else {
            echo "Please fill out all fields.";
        }
    }
}
?>

<!-- logindisplay.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Display</title>
</head>
<body>

<h2>Login Information</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Display the username and password
    echo "<p>Username: $username</p>";
    echo "<p>Password: $password</p>";
}
?>

<a href="loginform.php">Go Back to Log in Form</a>

</body>
</html>
>>>>>>> c9d1aee469bc84ffc9e67d1c8765f6cfb6d02db7
