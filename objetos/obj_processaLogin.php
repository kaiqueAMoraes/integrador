<?php

    require_once("obj_conexao_bd.php");

    $mensagem = "";



 if (isset($_POST["nome"]) && isset($_POST["senha"])) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];


       $conexao = AbreConexaoBd();


         $sql = "SELECT id FROM tb_administrador WHERE nome = '$nome' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            session_start();
            $_SESSION["user"] = mysqli_fetch_assoc($resultado);
            //header("location:../index.html");
            header("location:../paginas/paginaAdministrador.html");

        }
        else{
            echo $mensagem = "Login ou senha inválido!";
        }

        mysqli_close($conexao);
}
else{
    echo ("Conexão não foi possivel");
}

?>
