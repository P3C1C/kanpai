<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$id = isset($input['id']) ?  $input['id'] : '';

$sql = "SELECT * FROM bar where idBar='" . $id . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo "errore";
}
