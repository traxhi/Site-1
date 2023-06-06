<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigo - Mente & Coração</title>
    <link rel="stylesheet" href="item.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="D1">
        <div class="D2">
            <div class="imagem2">
                <img src="../imagens/livro2.png" alt="imagem1" height="500" width="300">
            </div>
        </div>
        <div class="D3"></div>
        <div class="D2">
            <div class="titulo">
                Mente & Coração <br>
                <div class="tag">
                    ARTIGO <br>
                </div>
                <div class="descricao">
                    "Uma Exploração da Conexão entre o Cérebro e as Emoções." <br>
                    O artigo investiga como as emoções podem afetar <br>
                    a saúde física e mental. <br>

                    <br>
                </div>
                <div class="botao1">
                    <a href="../itens&produtos/Lercapitulo.php"><button> LER </button></a>
                </div>
                <div class="estrelas">
                    <img onclick="Preencher('estrela1');" src="../imagens/star0.png" width="25px" class="estrela" id="estrela1">
                    <img onclick="Preencher('estrela2');" src="../imagens/star0.png" width="25px" class="estrela" id="estrela2">
                    <img onclick="Preencher('estrela3');" src="../imagens/star0.png" width="25px" class="estrela" id="estrela3">
                    <img onclick="Preencher('estrela4');" src="../imagens/star0.png" width="25px" class="estrela" id="estrela4">
                    <img onclick="Preencher('estrela5');" src="../imagens/star0.png" width="25px" class="estrela" id="estrela5">
                </div>
                <textarea class="linha2" id="comentario" name="comentario" placeholder="Adicione um comentário..." wrap="hard" maxlength="2500"></textarea>
            </div>
        </div>
    </div>


</body>
<script src="../java/animateto.js"></script>
<script>
    function Preencher(qual) {
        var estrelas = document.getElementsByClassName('estrela');
        var indice = parseInt(qual.substr(7)) - 1;

        for (var i = 0; i <= indice; i++) {
            estrelas[i].src = "../imagens/star1.png";
        }

        for (var i = indice + 1; i < estrelas.length; i++) {
            estrelas[i].src = "../imagens/star0.png";
        }
    }
</script>

</html>