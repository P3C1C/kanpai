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

$input = json_decode(file_get_contents('php://input'), true);

$nome = isset($input['nome']) ?  $input['nome'] : '';
$cognome = isset($input['cognome']) ?  $input['cognome'] : '';
$email = isset($input['email']) ?  $input['email'] : '';
$password = isset($input['password']) ?  $input['password'] : '';
$conpas = isset($input['conpas']) ?  $input['conpas'] : '';

$doppione = false;
$sql = "SELECT email FROM utenti";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
  if ($row["email"] == $email) {
    $doppione = true;
  }
}

if($doppione == true && $password != $conpas) {
  echo "Email già presente";
}
else{
  $sql = "INSERT INTO `utenti` (`nome`, `cognome`, `email`, `password`)
          VALUES ('$nome', '$cognome', '$email', '$password');";


  if ($conn->query($sql) === TRUE) {
    echo "successo";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
