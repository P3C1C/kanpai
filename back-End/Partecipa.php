<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$ide = isset($input['ide']) ?  $input['ide'] : '';
$idu = isset($input['idu']) ?  $input['idu'] : '';

$sql = "SELECT * FROM partecipau WHERE idUEvento='" . $ide . "' and idUtente='" . $idu . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "DELETE FROM partecipau WHERE idUEvento=" . $ide . " and idUtente=" . $idu;

    if ($conn->query($sql) === TRUE) {
        echo "eliminato";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    $sql = "INSERT INTO `partecipau` (`idUEvento`, `idUtente`)
            VALUES ('$ide', '$idu');";


    if ($conn->query($sql) === TRUE) {
        echo "successo";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
