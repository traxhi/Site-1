<?php
        include("conecta3.php");

        $nome = $_POST["nome"];
        $sinopse = $_POST["sinopse"];
        $texto = $_POST["texto"];
		$foto = file_get_contents($_FILES["foto"]["tmp_name"]);
		
		$comando = $pdo->prepare("INSERT INTO obra(nome,sinopse,texto,foto) VALUES(:nome,:sinopse,:texto,:foto)");
        $comando->bindParam(":nome", $nome);
        $comando->bindParam(":sinopse", $sinopse);
        $comando->bindParam(":texto", $texto);
        $comando->bindParam(":foto", $foto, PDO::PARAM_LOB);
		$resultado = $comando->execute();
        header("Location:publicar.php");

        $comando = $pdo->prepare("SELECT * FROM obra");
		$resultado = $comando->execute();
        while( $linhas = $comando->fetch() )
        {
            $dados_imagem = $linhas["foto"];
            $i = base64_encode($dados_imagem);

            $nome =  $linhas["nome"];
            $sinopse =  $linhas["sinopse"];
            $texto =  $linhas["texto"];

            echo("NOME: $nome SINOPSE: $sinopse TEXTO: $texto <br>");
            echo(" <img src='data:image/jpeg;base64,$i' width='100px'> <br> <br> ");
        }
		
?>