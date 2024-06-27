<?php

    //Chamando o banco de dados
    require_once("Conect.php");

    //pegando os valores
    $userConta = $_POST["userConta"];
    $email = $_POST["emailConta"];
    $senha = $_POST["senhaConta"];

    //verificando se ta vazio
    if($userConta == "" && $email == "" && $senha == "")
    {
        header("location: ../Pages/Cadastrar.html");
        die();

    }else
    {

        //exibir
        $sqlInsert = "INSERT INTO Conta(UsernameConta, Email, Senha)Values('$userConta', '$email', '$senha')";

        //verificando se foi
        if($conn->query($sqlInsert))
        {
            //echo("Foi Cadastrado com sucesso");
            header("location: ../Pages/Consultar.php");
        }else
        {
            echo("Erro: ". $sqlInsert . " " . $conn->error);
        }
    }

    $conn->close();
?>