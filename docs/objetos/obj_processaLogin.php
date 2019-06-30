<?php

    require_once("obj_conexao_bd.php");

    $mensagem = "";

 if (isset($_POST["nome"]) && isset($_POST["senha"])) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        

       $conexao = AbreConexaoBd();


        $sql = "SELECT id FROM tb_administrador WHERE nome = '$nome' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0){
            session_start();
            $_SESSION["user"] = mysqli_fetch_assoc($resultado);
            header("location:../paginas/paginaAdministrador.php");
        }
        else{
            session_start();
            $_SESSION["erro"] = true;
            header("location:../paginas/login.php");

        }
        mysqli_close($conexao);
    }

?>
