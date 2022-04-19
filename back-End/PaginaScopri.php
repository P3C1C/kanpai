<?php
include 'connection.php';

$conn = connection();

$sql = "SELECT * FROM eventiu";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $eventiu[] =
            [
                json_encode($row),
            ];
    }
} else {
    echo "Nessun evento";
}

$sql = "SELECT * FROM eventib";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $eventib[] =
            [
                json_encode($row),
            ];
    }
} else {
    echo "Nessun evento";
}
$eventi[] = $eventiu;
$eventi[] = $eventib;
echo json_encode($eventi);
