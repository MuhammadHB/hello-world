<?php
//store connections information in variables
$SERVER_name="localhost";
$username="root";
$password="";
$databaseName="banking";

//Establish a connection from php to database
     // test thr connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 