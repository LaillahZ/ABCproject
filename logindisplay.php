<?php
// Initialize a global variable to track login status
$isLogin = false;

// Read the file into arrays
$usernames = [];
$passwords = [];

// Open the file for reading and populate the arrays
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

/**
 * Function to check if the username and password exist in the arrays
 * @param string $username The username to search
 * @param string $password The password to match
 * @param array $usernames The array of usernames
 * @param array $passwords The array of passwords
 */
function searchArrays($username, $password, $usernames, $passwords) {
    global $isLogin;
    foreach ($usernames as $index => $storedUsername) {
        if ($storedUsername === $username && $passwords[$index] === $password) {
            $isLogin = true;
            break;
        }
    }
}

/**
 * Function to check if a username already exists in the array
 * @param string $username The username to search for
 * @param array $usernames The array of usernames
 * @return bool True if the username exists, false otherwise
 */
function isUsernameTaken($username, $usernames) {
    return in_array($username, $usernames);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Login logic
    if (isset($_POST["login"])) {
        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        if (!empty($username) && !empty($password)) {
            searchArrays($username, $password, $usernames, $passwords);
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
            if (!isUsernameTaken($username, $usernames)) {
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

<!-- Example usage of a two-dimensional array -->
<h3>Product List:</h3>
<?php
$products = [
    ["id" => 101, "name" => "Laptop", "price" => 800],
    ["id" => 102, "name" => "Smartphone", "price" => 500],
    ["id" => 103, "name" => "Tablet", "price" => 300],
];

foreach ($products as $product) {
    echo "<p>Product ID: {$product['id']}, Name: {$product['name']}, Price: \${$product['price']}</p>";
}
?>

</body>
</html>
