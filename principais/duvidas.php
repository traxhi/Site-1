<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="duvidas.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>

    <body>
        <div class="container">
            <h2>Fale Conosco</h2>
            <form id="resposta">
                <label for="name">Nome</label>
                <input type="text" class="nome" id="name" name="name" placeholder="Seu nome"><br>

                <label for="email">Email</label>
                <input type="email" class="email" id="email" name="email" placeholder="Seu email"><br>

                <label for="message">Mensagem</label>
                <textarea id="message" class="msg" id="mensagem" onkeypress="return searchKeyPress(event)"
                    placeholder="Digite sua mensagem"></textarea>
                <input type="submit" onclick="Enviar();"Value="Enviar" class="">
            </form>
            <div class="caixa">
                <a href="https://www.instagram.com/_haydavi_/"><img src="../imagens/instagram.png" width="42px"></a>
                <a href="https://www.facebook.com/profile.php?id=100008209638109"><img src="../imagens/facebook.png" width="40px"></a>
                <a href=""><img src="../imagens/email.png" width="40px"></a>
            </div>
    </body>
    <script src="../java"></script>