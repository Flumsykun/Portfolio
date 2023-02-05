<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
//make a connection to database
$hostname = "localhost";
$username = "jml_vdr";
$password = "Qc0he615@";
$dbname = "portfolio_1";

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check for connection error
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
//echo if connection is made
if ($conn) {
  echo "Connected to database successfully";
} else {
  echo "Connection failed";
}

// Close the connection when you're done
mysqli_close($conn);
?>
