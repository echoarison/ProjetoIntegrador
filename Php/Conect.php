<?php
    //ParametroDoServAndBanco
    $server = "localhost";
    $userDb = "root";
    $passDb = "";
    $bancoDb = "GuardaConta";

    $conn = new mysqli($server, $userDb, $passDb, $bancoDb);

    //Checando conexão
    if ($conn->connect_error){
        die("Falha na conexão: " . $conn->connect_error);
    }
?>