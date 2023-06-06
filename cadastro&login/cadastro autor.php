<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja um Autor</title>
    <link rel="stylesheet" href="cadastro autor.css">
</head>

<body>
    <?php
    include("../principais/menu.html");
        ?>

    <form action="crud4.php" method="post">
    <div class="caixa">
        <div class="esquerda">
            <div class="campos">
                Nome <br> <br>
                <input type="text" id="txtBusca" class="nome" name="nome" />
                <br> <br>
                E-mail <br> <br>
                <input type="text" id="txtBusca" class="email" name="email" />
                <br> <br>
                Senha <br> <br>
                <input type="password" id="txtBusca" class="senha" name="senha" />
                <br> <br>
            </div>
        </div>
        <img src="../imagens/perfil.png" class="perfil" height="150" width="150">
        <div class="direita">
            <div class="campos">
                Data de Nascimento<br> <br>
                <input type="date" id="txtBusca" class="datanas" name="data"/>
                <br> <br>
                Biografia <br> <br>
                <input type="text" id="txtBusca" class="biografia" name="biografia" />
                <br> <br>
                Gênero
                <br> <br>

                <div class="generos">
                    <div class="op">
                        <input type="radio" name="o"> Romance
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Ficção
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Fantasia
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Artigo
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Outro
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="botao1">
        <button type="submit" name="cadastrar">CONTINUAR</button>
    </div>
    </form>
</body>
<Script src="../java/animateto.js"></Script>

</html>