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
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieving the form data
  //  $pickupDate = $_POST['pickup-date'];
    //$returnDate = $_POST['return-date'];
    //$pickupLocation = $_POST['pickup-location'];
    //$returnLocation = $_POST['return-location'];

    // You can perform further validation and sanitization on the form data if required

    // Inserting the form data into the database-->
   // try {
     //   $stmt = $pdo->prepare("INSERT INTO cars () VALUES ()");
       // $stmt->execute([$pickupDate, $returnDate, $pickupLocation, $returnLocation]);

        // Redirecting the user to the cart page after successful booking
        header("Location: pay1.html");
        exit;
    
    

?>

