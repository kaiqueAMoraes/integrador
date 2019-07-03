<?php
require_once("../objetos/obj_conexao_bd.php");
$conexao = AbreConexaoBd();

$istagram= $_POST['instagram'];
$facebook= $_POST['facebook'];
$email= $_POST['email'];

if(isset($_POST['instagram'])){
  $sql = "INSERT INTO tb_contato (email,instagram,facebook) VALUES ('".$email."','".$istagram."','".$facebook."')";

  if (mysqli_query($conexao, $sql)){
      session_start();
      $_SESSION["contato"] = true;

      header("location:../paginas/contato.php");

  }
}
else {
    session_start();
    $_SESSION["erro"] = true;

    header("location:../paginas/contato.php");
}






 ?>
