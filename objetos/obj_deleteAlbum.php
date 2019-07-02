<?php
require_once("../objetos/obj_conexao_bd.php");
$conexao = AbreConexaoBd();

if (isset($_GET['id_album'])){
     $album= $_GET['id_album'];
     $fk0= "SET foreign_key_checks = 0;";
     $delete="DELETE FROM `tb_album`, `tb_foto` USING `tb_album`, `tb_foto` WHERE `tb_album`.`id_album` = ".$album." AND `tb_foto`.`id_album` = ".$album.";";
     $fk1= "SET foreign_key_checks = 1;";
     echo "<script type='text/javascript'>window.alert('! Sua mensagem foi enviada com sucesso!');</script>";

  if(mysqli_query($conexao, $fk0)){

      if(mysqli_query($conexao, $delete)){

         if( mysqli_query($conexao, $fk1)){
             header("location:../paginas/editarAlbuns.php");

                mysqli_close($conexao);
         }


      }

   }



/*
     $delete.$fk1;
     $resulttado= mysqli_query($conexao, $sql);

     if(mysqli_query($conexao, $sql)){

       echo "Album apagado com Sucesso";

     }
*/
}

?>
