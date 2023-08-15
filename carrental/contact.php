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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $subject = $_POST['subject'];
   

    // You can perform further validation and sanitization on the form data if required

    // Inserting the form data into the database
    try {
        $stmt = $pdo->prepare("INSERT INTO contact (username, email, city, subject) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $email, $city, $subject]);

        // Redirecting the user to the cart page after successful payment
        header("Location: cars.html");
        exit;
    } catch (PDOException $e) {
        die("Error occurred: " . $e->getMessage());
    }
}
?>
