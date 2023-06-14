<?php

include("conecta4.php");
// Para pegar o texto dos inputs:
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$bio = $_POST["data"];
$foto = $_POST["biografia"];


if (isset($_POST["atualizar"])) {
    $comando = $pdo->prepare("UPDATE cadastropedro SET nome='$nome', senha='$senha', bio='$bio' foto='$foto' WHERE email='$email'");
    $resultado = $comando->execute();
    header("Location: perfil.php");
}

?>