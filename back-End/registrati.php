<?php
include 'connection.php';

$conn = connection();

$input = json_decode(file_get_contents('php://input'), true);

$nome = isset($input['nome']) ?  $input['nome'] : '';
$cognome = isset($input['cognome']) ?  $input['cognome'] : '';
$email = isset($input['email']) ?  $input['email'] : '';
$password = isset($input['password']) ?  $input['password'] : '';
$conpas = isset($input['conpas']) ?  $input['conpas'] : '';
$tipo = isset($input['tipo']) ?  $input['tipo'] : '';

$doppione = false;

if ($tipo == "u") {
    $sql = "SELECT email FROM utenti";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row["email"] == $email) {
            $doppione = true;
        }
    }
    if ($doppione == true) {
        echo "Email già presente";
    } else {
        $sql = "INSERT INTO `utenti` (`nome`, `cognome`, `email`, `password`)
            VALUES ('$nome', '$cognome', '$email', '$password');";


        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT * FROM utenti WHERE email='" . $email . "' and password='" . $password . "'";
            $result = $conn->query($sql);
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
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    $sql = "SELECT email FROM bar";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row["email"] == $email) {
            $doppione = true;
        }
    }
    if ($doppione == true) {
        echo "Email già presente";
    } else {
        $sql = "INSERT INTO `bar` (`nome`, `email`, `password`, idIndirizzo)
            VALUES ('$nome', '$email', '$password', '3');";


        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT * FROM bar WHERE email='" . $email . "' and password='" . $password . "'";
            $result = $conn->query($sql);
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
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
