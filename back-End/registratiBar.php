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

echo "DIO GRANDISSIMO";

$input = json_decode(file_get_contents('php://input'), true);

$nome = isset($input['nome']) ?  $input['nome'] : '';
$email = isset($input['emailbar']) ?  $input['emailbar'] : '';
$password = isset($input['password']) ?  $input['password'] : '';
$conpas = isset($input['conpas']) ?  $input['conpas'] : '';



$doppione = false;
$sql = "SELECT email FROM bar";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
  if ($row["email"] == $email) {
    $doppione = true;
  }
}

if($doppione == true && $password == $conpas) {
  echo "Email già presente";
}
else{
  $sql = "INSERT INTO `bar` (`nome`, `email`, `password`)
          VALUES ('$nome', '$email', '$password');";


  if ($conn->query($sql) === TRUE) {
    echo "successo";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
