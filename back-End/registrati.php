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
$sql = "SELECT email FROM utenti";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) 
{
  if($row["email"] == $_POST["email"])
  {
    $doppione = true;
  }
}

if($doppione == true){
  header('Location: error.php');
}
else{
  $sql = "INSERT INTO `utenti` (`idUtente`, `nome`, `cognome`, `email`, `password`, `dataNascita`, `sesso`, `biografia`) 
          VALUES (NULL, '$_POST[nome]', '$_POST[cognome]', '$_POST[email]', '$_POST[password]', '', '', '');";

  if ($conn->query($sql) === TRUE) {
    header('Location: successo.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
