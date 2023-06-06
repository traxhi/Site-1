<?php

include("conecta3.php");
$nome = $_POST["nome"];
$sinopse = $_POST["sinopse"];
$texto = $_POST["texto"];
if (isset($_POST["publicar"])) {

    $comando = $pdo->prepare("INSERT INTO obra VALUES('$nome','$sinopse','$texto','')");
    $resultado = $comando->execute();
    header("Location:publicar.php");
}
?>