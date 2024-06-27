<?php
    //chamando conexao
    require_once("../Php/Conect.php");

    //pegando os valores
    $id = intval($_POST["idConta"]);
    $userConta = $_POST["userConta"];
    $email = $_POST["emailConta"];
    $senha = $_POST["senhaConta"];

    //comando sql
    $sqlUpdate = "UPDATE Conta SET UsernameConta ='$userConta', Email ='$email' , Senha ='$senha'  WHERE ContaID = $id";

    if($conn->query($sqlUpdate) === TRUE)
    {
        //echo "update com sucesso!!!";
        header("location: ../Pages/AltOuDel.php");

    }else
    {
        echo "Error no update: " . $conn->error;
    }

    $conn->close();

?>