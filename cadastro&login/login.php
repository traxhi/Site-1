<?php
 session_start();
    include("../principais/menu.html");

    if(isset($_POST["senha"]))
    {
        $email = $_POST["email"];
        $_SESSION['login'] = $email;
        // $email =  $_SESSION['login'];
        $senha = $_POST["senha"];
        include("conecta2.php");
        $comando = $pdo->prepare("Select * FROM cadastropedro where email='$email' and senha='$senha'");
        $resultado = $comando ->execute();
        $n = 0;
        while( $linhas = $comando ->fetch() )
        {
            $n = $n + 1;
        }

        if($n > 0){
            header("Location: ../itens&produtos/textos.php");
        }

    }

    // Verificar se o usuário já está autenticado
    if (isset ($_SESSION['login']) && ($_SESSION['login'])!="" ) {
        header("Location: ../itens&produtos/textos.php");
    }

    if (isset($_POST["senha"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        include("conecta2.php");
        $comando = $pdo->prepare("SELECT * FROM cadastropedro WHERE email = :email AND senha = :senha");
        $comando->bindParam(":email", $email);
        $comando->bindParam(":senha", $senha);
        $comando->execute();
        $n = $comando->rowCount();

        if ($n > 0) {
            $_SESSION['login'] = $email;
            header("Location: ../itens&produtos/textos.php");
            exit();
        }
    }

        ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="embaixo">
        <div class="usuario">
            <img src="../imagens/usuario.png" class="usuarioo">
        </div>
        <form action="login.php" method="post">
        <div class="retangulo">
            <div class="escritas">
                E-mail
                <input name="email" type="text" id="txtBusca" class="Email" />
                Senha
                <input name="senha" type="text" id="txtBusca" class="Senha" />
            </div>
            <div class="sejaaautor">
            </div>
            <div class="botao">
                <button type="submit">CONTINUAR</button>
            </div><br>
            <div class="final">
                <div class="cadastro">Não tem cadastro?</div>
                <a href="../cadastro&login/cadastro.php">
                    <div class="registre">Registre-se aqui!</div>
                </a>
            </div>

        </div>
        </form>
    </div>

</body>
<script src="../java/animateto.js"></script>

</html>