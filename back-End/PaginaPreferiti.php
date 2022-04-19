<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$id = isset($input['id']) ?  $input['id'] : '';

$sql = "SELECT * FROM bar
        INNER JOIN segue ON segue.idBar=bar.idBar
        WHERE segue.idUtente = '" . $id. "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $eventi[] = json_encode($row);
    }
    echo json_encode($eventi);
} else {
    echo "Non segui a nessun bar";
}

