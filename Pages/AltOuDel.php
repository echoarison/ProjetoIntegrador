<html>

    <?php
        //chamando conexao
        require_once("../Php/Conect.php");
    ?>

    <!--InicioCabecario-->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width", intial-scale="1.0">
        <link rel="stylesheet" href="../Css/style.css">
        <title>Guarda Senha</title>
    </head>
    <!--FimDoCabecario-->

    <body>

        <header class="centro cabecario">
            <h1>Guarda Conta</h1>
        </header>

        <!--NavegacaoDasFuncoes-->
        <section class="menuNavExterno">
            <nav class="menuNav">
                <a class="" href="../Index.html">Inicio</a>
                <a class="" href="./Cadastrar.html">Cadastrar</a>
                <a class="" href="./Consultar.php">Consultar</a>
            </nav>
        </section>
        <!--FimNavegacaoDasFuncoes-->

        <?php
            //puxando dados
            $sqlSelect = "SELECT * FROM Conta";
            $result = $conn->query($sqlSelect);

        ?>

        <!--InicioFormulario-->
        <section>
            <table>
                <tr>
                  <th>Username Conta</th>
                  <th>E-mail</th>
                  <th>Senha</th>
                  <th>Alterar</th>
                  <th>Deletar</th>
                </tr>
                <?php

                //trazendo as  consultas
                if($result->num_rows > 0)
                {
                    //saida
                    while($row = $result->fetch_assoc()){
                        echo"<form method='post' action='../Php/AltData.php'>";
                        echo"<tr>";
                        echo"<input type='hidden' name='idConta' value='".$row["ContaID"]."'>";
                        echo"<td>".$row["UsernameConta"]."</td>";
                        echo"<input type='hidden' name='usernameConta' value='".$row["UsernameConta"]."'>";
                        echo"<td>".$row["Email"]."</td>";
                        echo"<input type='hidden' name='emailConta' value='".$row["Email"]."'>";
                        echo"<td>".$row["Senha"]."</td>";
                        echo"<input type='hidden' name='senhaConta' value='".$row["Senha"]."'>";
                        echo"<td><button type='submit'>Alterar</button></td>";
                        echo"</form>";

                        echo"<form method='post' action='../Php/DelRegistro.php'>";
                        echo"<input type='hidden' name='idConta' value='".$row["ContaID"]."'>";
                        echo"<td><button type='submit'>Deletar</button></td>";
                        echo"</form>";
                        
                        echo"</tr>";
                        
                    }
                }else
                {
                    echo"not found result, back for index";
                }
                
                $conn->close();
            ?>
               
              </table>
        </section>
        <!--FimFormulario-->

        <footer class="centro rodape">
            <h4>Guarda Conta</h1>
        </footer>

    </body>
</html>