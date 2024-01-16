<?php
// Datbase credentials
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'sam';


// DSN (Data Source Name) specifies the host computer for the MySQL database
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

// error handling
try {
  // PDO class represents the connection
  // create a new PDO connection instance to the MySQL database
  $pdo = new PDO($dsn, $username, $password);

  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch as an associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  echo("ERROR: Could not connect. " . $e->getMessage());
}
?>
