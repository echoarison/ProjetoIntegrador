<?php

    //chamando conexao
    require_once("../Php/Conect.php");

    //pegando dados
    $Id = intval($_POST['idConta']);

    //comando sql
    $sqlDel = "DELETE FROM Conta WHERE ContaID = $Id";

    if ($conn->query($sqlDel) === TRUE) {
        //echo "Deletado Com Sucesso!";
        header("location: ../Pages/AltOuDel.php");
      } else {
        echo "Error in Delete: " . $conn->error;
      }
      
      $conn->close();
?>