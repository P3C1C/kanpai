<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$id = isset($input['id']) ?  $input['id'] : '';

$sql = "DELETE FROM eventib WHERE idBEvento=" . $id;

if ($conn->query($sql) === TRUE) {
    echo "eliminato";
} else {
    echo "Error deleting record: " . $conn->error;
}
