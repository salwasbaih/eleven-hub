
<!--   اتصال الداتا بيز بالموقع  $host = 'localhost';
$user = 'root';
$password = '';
$database_name = 'william';
try {
    $conn = new PDO("mysql:host=$host;dbname=$database_name", $user, $password);
    var_dump($conn);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die('Error');
}

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "elevenhub";
// Create connection
$conn = new mysqli($servername, $username, $password , $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>


<?php

?>

