<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$ide = isset($input['ide']) ?  $input['ide'] : '';
$idu = isset($input['idu']) ?  $input['idu'] : '';

$sql = "SELECT * FROM partecipau WHERE idUEvento='" . $ide . "' and idUtente='" . $idu . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "y";
} else {
    echo "n";
}
