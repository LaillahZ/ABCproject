<!--11/21/2024--Laillah Zainath-->
<!--This website is about business-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Business Name</title>
    <link rel="stylesheet" href="CSS/styles.css"> <!-- Link to your CSS file -->
</head>
<body>
<header>
    <h1>Your Business Name</h1>
</header>
<?php

function welcomeMessage() {
    return "Welcome to our business, you will know more!";
}
?>
<!--This is the welcome section-->
<section class="welcome">
    <h2><?php echo welcomeMessage(); ?></h2>
</section>
<!--This is the description-->
<section class="description">
    <h2>Our business welcome you !</h2>
    <p>We are a [type of business] dedicated to providing high-quality [products/services].</p>
    <img src="images/business.webp" alt="Business Image"> <!-- Add an image here -->
</section>
<!--This the footer-->
<footer>
    <p>&copy; <?php echo date("Y"); ?> Your Business Name. All Rights Reserved.</p>
</footer>
</body>
</html>
