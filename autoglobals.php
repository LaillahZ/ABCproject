<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Autoglobals Lab</title>
</head>
<body>
<h1>PHP Autoglobals Lab</h1>
<p><strong>Version of PHP:</strong> <?php echo phpversion(); ?></p>
<p><strong>Server Name:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>
<p><strong>Operating System:</strong> <?php echo PHP_OS; ?></p>
<p><strong>Server Port:</strong> <?php echo $_SERVER['SERVER_PORT']; ?></p>
<p><strong>Username:</strong> <?php echo getenv('USERNAME'); ?></p>
<p><strong>Computer Name:</strong> <?php echo getenv('COMPUTERNAME'); ?></p>
<p><strong>Script Name:</strong> <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
<p><strong>Document Root Path:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
<p><strong>Request Method:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
<p><strong>Server Address:</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></p>

<h2>Contents of $_SERVER</h2>
<pre><?php var_dump($_SERVER); ?></pre>

<h2>Contents of $GLOBALS</h2>
<pre><?php var_dump($GLOBALS); ?></pre>

<h2>PHP Info</h2>
<pre><?php phpinfo(); ?></pre>
</body>
</html>
