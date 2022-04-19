<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$nome = isset($input['nome']) ?  $input['nome'] : '';
$descrizione = isset($input['descrizione']) ?  $input['descrizione'] : '';
$id = isset($input['id']) ?  $input['id'] : '';

$sql = "UPDATE `bar` SET `nome` = '" . $nome . "', `descrizione` = '" . $descrizione . "' WHERE `idBar` = " . $id;

if ($conn->query($sql) === TRUE) {
    $sql = "SELECT * FROM bar where idBar='" . $id . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $user = [
                [
                    "tipo" => "b",
                    "user" => json_encode($row),
                ],
            ];
            echo json_encode($user);
        }
    } else {
        echo "errore";
    }
} else {
    echo "Error updating record: " . $conn->error;
}
