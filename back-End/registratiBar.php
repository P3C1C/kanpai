<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kanpai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$doppione = false;
$sqle = "SELECT email FROM bar";
$result = $conn->query($sqle);

foreach ($result as $x) {
  if ($x == $_POST['email']) {
    $doppione = true;
  }
}

if ($result) {
  header('Location: error.php');
} else {
  $sql = "INSERT INTO `bar` (`idBar`, `nome`, `email`, `password`, `nCivico`, `descrizione`, `idIndirizzo`) 
          VALUES (NULL, '$_POST[nome]', '$_POST[email]', '$_POST[password]', '$_POST[civico]', '', '3');";

  if ($conn->query($sql) === TRUE) {
    header('Location: successo.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
