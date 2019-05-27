<?php

    //conexão com o banco
    $host = "127.0.0.1";
    $usuario = "root";
    $senhaBd = "";
    $banco_de_dados = "fotografo";

    $conexao = mysqli_connect($host, $usuario, $senhaBd, $banco_de_dados);

    if (!$conexao) {
        die("Não foi possível!");
    }
    //--------------------------------

?>
