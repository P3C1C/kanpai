<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$idb = isset($input['idb']) ?  $input['idb'] : '';
$idu = isset($input['idu']) ?  $input['idu'] : '';

$sql = "SELECT * FROM segue WHERE idBar='" . $idb . "' and idUtente='" . $idu . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "DELETE FROM segue WHERE idBar=" . $idb . " and idUtente=" . $idu;

    if ($conn->query($sql) === TRUE) {
        echo "eliminato";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    $sql = "INSERT INTO `segue` (`idBar`, `idUtente`)
            VALUES ('$idb', '$idu');";


    if ($conn->query($sql) === TRUE) {
        echo "successo";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
