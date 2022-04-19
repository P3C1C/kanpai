<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$id = isset($input['id']) ?  $input['id'] : '';

$sql = "SELECT nome FROM utenti where idUtente='" . $id . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo $result->fetch_assoc()['nome'];
} else {
    echo "errore";
}
