<html>
    <?php
        //recebendo os dados
        $Id = intval($_POST['idConta']);
        $userConta = $_POST['usernameConta'];
        $email = $_POST['emailConta'];
        $senha = $_POST['senhaConta'];
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
                <a class="" href="../Pages/Consultar.php">Consultar Conta</a>
                <a class="" href="../Pages/AltOuDel.php">Alterar ou Deletar</a>
            </nav>
        </section>
        <!--FimNavegacaoDasFuncoes-->

        <!--InicioFormulario-->
        <section class="formExterno centro">
            <form method="post" action="update.php" class="formInterno">
                <input type="hidden" name="idConta" value="<?php echo $Id;?>">
                <h2>Username</h2>
                <input type="text" name="userConta" class="" placeholder="<?php echo $userConta; ?>" value="<?php echo $userConta; ?>">

                <br /><br />

                <h2>E-mail</h2>
                <input type="email" name="emailConta" class="" placeholder="<?php echo $email; ?>" value="<?php echo $email; ?>">

                <br /><br />

                <h2>Senha</h2>
                <input type="password" name="senhaConta" class="" placeholder="<?php echo $senha; ?>" value="<?php echo $senha; ?>">

                <br /><br />

                <button type="submit" class="botao">Enviar</button>
            </form>
        </section>
        <!--FimFormulario-->

        <footer class="centro rodape">
            <h4>Guarda Conta</h1>
        </footer>

    </body>
</html>