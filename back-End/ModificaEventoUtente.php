<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$nome = isset($input['nome']) ?  $input['nome'] : '';
$descrizione = isset($input['descrizione']) ?  $input['descrizione'] : '';
$categoria = isset($input['categoria']) ?  $input['categoria'] : '';
$np = isset($input['np']) ?  $input['np'] : '';
$id = isset($input['id']) ?  $input['id'] : '';
$data = isset($input['data']) ?  $input['data'] : '';
$time = isset($input['time']) ?  $input['time'] : '';

$sql = "UPDATE `eventiu` SET `nome` = '" . $nome . "', `descrizione` = '" . $descrizione . "', `categoria` = '" . $categoria . "', `nPartecipanti` = '" . $np . "', `data` = '" . $data . "', `ora` = '" . $time . "' WHERE `idUEvento` = " . $id;

if ($conn->query($sql) === TRUE) {
    echo "successo";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
