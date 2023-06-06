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
    <div class="caixa">
        Tire sua dúvida por aqui:
    </div>
    <br>
    <div class="beleza">
        <div class="respostas" id="resposta"></div>
        <div class="botao">
          <input type="text" placeholder="Digite aqui..." id="mensagem" class="inputmsg" onkeypress="return searchKeyPress(event)">
          <button class="enter" type="submit" id="botao" onclick="Enviar();">↩</button Value="Search" >
      </div>
    </div>

</body>
<script src="../java/caixadetexto.js"></script>