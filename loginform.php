<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>
<form action="logindisplay.php" method="post">
    <label for="username">Username:</label>
    <input
            type="text"
            id="username"
            name="username"
            value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>"
            required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" name="login" value="Submit">
    <input type="submit" name="create" value="Create Account">
</form>

</body>
</html>

