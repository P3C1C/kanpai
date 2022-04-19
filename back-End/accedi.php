<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$email = isset($input['email']) ?  $input['email'] : '';
$password = isset($input['password']) ?  $input['password'] : '';

$sql = "SELECT * FROM utenti where email='" . $email . "' and password='" . $password . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $user = [
            [
                "tipo" => "u",
                "user" => json_encode($row),
            ],
        ];
        echo json_encode($user);
    }
} else {
    $sql = "SELECT * FROM bar where email='" . $email . "' and password='" . $password . "'";
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
}
$conn->close();
