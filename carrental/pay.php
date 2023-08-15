<?php
// Assuming your database credentials
$host = 'localhost';
$dbName = 'carrental';
$username = 'root';
$password = '';

// Establishing a database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Checking if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieving the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $card = $_POST['card'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    // You can perform further validation and sanitization on the form data if required

    // Inserting the form data into the database
    try {
        $stmt = $pdo->prepare("INSERT INTO payment (name, email, card, expiry, cvv) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $card, $expiry, $cvv]);

        // Redirecting the user to the cart page after successful payment
        header("Location: cart.html");
        exit;
    } catch (PDOException $e) {
        die("Error occurred: " . $e->getMessage());
    }
}
?>
