<?php
require_once("../objetos/obj_conexao_bd.php");
$conexao = AbreConexaoBd();

$istagram= $_POST['instagram'];
$facebook= $_POST['facebook'];
$email= $_POST['email'];

if(isset($_POST['instagram']) || isset($_POST['facebook']) || isset($_POST['email']) ){
  $sql = "UPDATE tb_contato SET" ;
  if( strlen($_POST['instagram'])>= 1){
   $sql .=  " instagram= '".$_POST['instagram']."' ";
   }

   if(strlen($_POST['facebook']) >= 1){
    $sql .= ", facebook= '".$_POST['facebook']."' ";
   }

   if(strlen($_POST['email'])>= 1){
      $sql .= ", email= '".$_POST['email']."' ";
  }
  mysqli_query($conexao, $sql);


}

if (mysqli_query($conexao, $sql)){
    session_start();
    $_SESSION["contato"] = true;
    mysqli_close($conexao);
    header("location:../paginas/contato.php");

}
else {
    session_start();
    $_SESSION["erro"] = true;
    mysqli_close($conexao);
    header("location:../paginas/contato.php");
}






 ?>
