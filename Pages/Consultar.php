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
                <a class="" href="./AltOuDel.php">Alterar ou Deletar</a>
            </nav>
        </section>
        <!--FimNavegacaoDasFuncoes-->

        <?php
            //puxando dados
            $sqlSelect = "SELECT * FROM Conta";
            $result = $conn->query($sqlSelect);

        ?>

        <!--InicioFormulario-->
        <section class="#">
            <table>
                <tr>
                  <th>Username Conta</th>
                  <th>E-mail</th>
                  <th>Senha</th>
                </tr>

            <?php

                //trazendo as  consultas
                if($result->num_rows > 0)
                {
                    //saida
                    while($row = $result->fetch_assoc()){
                        echo"<tr>";
                        echo"<td>".$row["UsernameConta"]."</td>";
                        echo"<td>".$row["Email"]."</td>";
                        echo"<td>".$row["Senha"]."</td>";
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