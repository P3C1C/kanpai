<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$nome = isset($input['nome']) ?  $input['nome'] : '';
$descrizione = isset($input['descrizione']) ?  $input['descrizione'] : '';
$id = isset($input['id']) ?  $input['id'] : '';
$data = isset($input['data']) ?  $input['data'] : '';
$time = isset($input['time']) ?  $input['time'] : '';

$sql = "INSERT INTO `eventib` (`nome`, `descrizione`, `data`, `ora`, `idIndirizzo`, `idBar`) VALUES 
('$nome', '$descrizione', '$data', '$time', '3', '$id');";


if ($conn->query($sql) === TRUE) {
    echo "successo";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
