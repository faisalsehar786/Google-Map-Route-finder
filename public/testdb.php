<?php


$servername = "89.46.111.211";
$username = "Sql1450824";
$password = "2p78mt2416";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Sql1450824_1", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>