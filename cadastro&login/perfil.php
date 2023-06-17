<?php 
    session_start();
    include("conecta4.php");

    // Verificar se o usuário está autenticado
    if (!isset($_SESSION['login']) || ($_SESSION['login'])=="") {
        header("Location: login.php");
        exit();
    }

    $email = $_SESSION["login"];

    // Recupera as informações do usuário do banco de dados
    $comando = $pdo->prepare("SELECT nome, bio, senha, foto FROM cadastropedro WHERE email = :email");
    $comando->bindValue(":email", $email);
    $comando->execute();

    // Atribui os valores recuperados às variáveis correspondentes
    $resultado = $comando->fetch();
    $nome = $resultado['nome'];
    $biografia = $resultado['bio'];
    $senha = $resultado['senha'];
    $caminhofoto = $resultado['foto'];
    $base64Imagem = base64_encode($caminhofoto);

    if (empty($caminhofoto)) {
        $caminhofoto = "../imagens/ImagenG.png";
        $base64Imagem = base64_encode(file_get_contents($caminhofoto));
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfil.css">
</head>

<body>
    <?php
        include("../principais/menu.html");
    ?>
    <div class="caixa1">Meu Perfil</div>
    <div class="caixa2">
        <div class="caixa3">
            <div id="image-container">
                <img src="data:image/jpeg;base64,<?php echo $base64Imagem; ?>" width="300px" height="350px" class="imagem">
            </div>
            <form action="crud3.php" method="post" enctype="multipart/form-data">
                <input type="file" name="foto" id="image-input" class="envimg" style="display: none" onchange="sendImage()">
                <div class="botao1" value="foto" id="foto" onclick="openFileInput()">Importar capa</div>
            </form>
        </div>
        <div class="caixa4">
            <div class="obra">
                <input type="text" class="linha" id="nome" name="nome" value="<?php echo $nome; ?>" maxlength="100" placeholder="Nome" required><br>
                <input type="text" class="linha" id="email" name="email" value="<?php echo $email; ?>" maxlength="100" placeholder="E-Mail" readonly>
                <br>
                <input type="password" class="linha" id="senha" name="senha" value="<?php echo $senha; ?>" maxlength="100" placeholder="Senha" required>
            </div>
            <div class="caixa5">
                <textarea class="linha2" id="capitulo" name="bio" placeholder="Biografia..." wrap="hard" required maxlength="500"><?php echo $biografia; ?></textarea>
            </div>
        </div>
        <input type="submit" value="Salvar" name="salvar" class="botao2">
        <form action="logout.php" method="post">
            <input type="submit" value="Logout" name="logout" class="botao3">
        </form>
    </div>
</body>
<script src="../java/animateto.js"></script>
<script>
    function openFileInput() {
        document.getElementById('image-input').click();
    }

    function sendImage() {
        var input = document.getElementById('image-input');
        var container = document.getElementById('image-container');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('image-preview');
                container.innerHTML = '';
                container.appendChild(img);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</html>