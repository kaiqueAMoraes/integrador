<?php

if (isset($_POST['excluir'])){
     $album= $_POST['excluir'];
     $fk0= "SET foreign_key_checks = 0;";
     $delete="DELETE FROM `tb_album`, `tb_foto` USING `tb_album`, `tb_foto` WHERE `tb_album`.`id_album` = ".$album." AND `tb_foto`.`id_album` = ".$album.";";
     $fk1= "SET foreign_key_checks = 1;";
     $sql= $fk0.$delete.$fk1;
     $resulttado= mysqli_query($conexao, $sql);

     if(mysqli_query($conexao, $sql)){

       echo "Album apagado com Sucesso";

     }
}

?>
