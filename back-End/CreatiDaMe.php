<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$id = isset($input['id']) ?  $input['id'] : '';
$tipo = isset($input['tipo']) ?  $input['tipo'] : '';

if ($tipo == 'u') {
    $sql = "SELECT * FROM eventiu where idUtente='" . $id . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $eventiu[] = 
            [
                "evento" => json_encode($row),
            ];
        }
        echo json_encode($eventiu);
    } else {
        echo "Nessun evento";
    }
} else {
    $sql = "SELECT * FROM eventib where idBar='" . $id . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $eventib[] = ['evento' => json_encode($row)];
        }
        echo json_encode($eventib);
    } else {
        echo "Nessun evento";
    }
}
