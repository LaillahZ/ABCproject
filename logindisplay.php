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
