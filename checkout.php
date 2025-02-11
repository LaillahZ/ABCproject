<?php
session_start(); // Start the session to access session data

// Check if the order object is in the session
if (!isset($_SESSION['order'])) {
    echo "You need to make an order first.";
    exit;
}

// Retrieve the order object from the session
$order = unserialize($_SESSION['order']); // Unserialize the order object

// Example of displaying the order data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>

<h2>Order Checkout</h2>

<?php
// Display the order details
echo "<p>Item: " . $order->getItemName() . "</p>";
echo "<p>Quantity: " . $order->getQuantity() . "</p>";
echo "<p>Price: $" . $order->getPrice() . "</p>";
echo "<p>Customer: " . $order->getCustomerName() . "</p>";
echo "<p>Address: " . $order->getAddress() . "</p>";

// Example of adding the order to the database (replace with your DB credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query to insert the order data into the database
$sql = "INSERT INTO order_table (item_name, quantity, price, customer_name, address)
        VALUES ('" . $order->getItemName() . "', " . $order->getQuantity() . ", " . $order->getPrice() . ", '" . $order->getCustomerName() . "', '" . $order->getAddress() . "')";

// Execute the query and check for errors
if ($conn->query($sql) === TRUE) {
    echo "<p>Your order has been placed successfully!</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

// Optionally, clear the session after placing the order
session_unset();
session_destroy();
?>

</body>
</html>
