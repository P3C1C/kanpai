<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kanpai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM utenti where email='" . $_POST["email"] . "' and password='" . $_POST["password"] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        header('Location: ../front-End/file/home.php');
    }
} else {
    $sql = "SELECT * FROM bar where email='" . $_POST["email"] . "' and password='" . $_POST["password"] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            header('Location: ../front-End/file/home.php');
        }
    } else {
        header('Location: error.php');
    }
}

$conn->close();
