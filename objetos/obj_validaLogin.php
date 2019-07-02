<?php
session_start();

if (!$_SESSION["user"]){
    // se já estiver logado, redireciona para a pagina inicial
    header("location:../login.php");
}

 ?>
