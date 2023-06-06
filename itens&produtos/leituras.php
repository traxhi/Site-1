<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Leituras</title>
    <link rel="stylesheet" href="../itens&produtos/leituras.css">
</head>
<body>
<?php
    include("../principais/menu.html")
        ?>
    <div class="pesquisa">
        <div class="filtro"><img src="../imagens/FILTRO.png" width="20px" class="Filtrao">Filtrar por
            <select id="Filtross" class="filtrosss">
                <option selected>Todos</option>
                <option>Artigo</option>
                <option>Manuscrito</option>
                <option>Texto</option>
               </select></div>
            <div class="barra">
                <input type="text" id="txtBusca" placeholder="Buscar..." maxlength="256"/>
                <img src="../imagens/Lupa.png" class="lupinha" height="30px">
            </div>
    </div>
    <br><br>
    <div class="produtos">
        <div class="itens1">
            <div class="item1">
                <img src="../imagens/ImagenG.png" width="90%" height="300px">
                Artigo
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
            <div class="item2">
                <img src="../imagens/ImagenG.png" width="90%" height="300px">
                Manuscrito
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
            <div class="item3">
                <img src="../imagens/ImagenG.png" width="90%" height="300px">
                Texto
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
        </div>
            
    </div>
    <div class="produtos">
        <div class="itens1">
            <div class="item1">
                <img src="../imagens/ImagenG.png" width="90%" height="300px">
                Artigo
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
            <div class="item2">
                <img src="../imagens/ImagenG.png" width="90%" height="300px">
                Manuscrito
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
            <div class="item3">
                <img src="../imagens/ImagenG.png" width="90%" height="300px">
                Texto
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
        </div>
    </div>
</body>
<script src="../java/animateto.js"></script>
</html>