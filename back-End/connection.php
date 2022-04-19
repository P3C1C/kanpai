<?php
function connection()
{                                 
    $indirizzo = "localhost";
    $nome_database = "kanpai";
    $utente = "root";
    $password2 = "";
    $connessione = mysqli_connect($indirizzo, $utente, $password2, $nome_database) or die("NON E' STATO POSSIBILE CONNETTERSI AL DATABASE");
    mysqli_select_db($connessione, $nome_database);
    return $connessione;
}
