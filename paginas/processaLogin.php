<?php
    session_start();
    include ("obConexaoBd.php");

$nome  = $_POST["nome"];

$senha = $_POST["senha"];

if(empty($nome) || empty($senha) ){
    header("location:login.php");
}
else{


        $sql = "SELECT id FROM tb_administrador WHERE nome = '".$nome."' AND senha = '".$senhaCriptografada."'";

        $resultado = mysqli_query($conexao, $sql);

       //  print_r( mysqli_fetch_row($resultado))  ;

        if (mysqli_num_rows($resultado) > 0) {

            $_SESSION["user"] = 10;
            header("location:home.php");
        }
        else{
           echo  $mensagem = "Login ou senha inválido!";
    }

}
