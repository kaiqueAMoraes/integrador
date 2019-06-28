<?php

if (isset($_POST['excluir'])){

 $sql= "SET foreign_key_checks = 0; DELETE FROM `tb_album`, `tb_foto` USING `tb_album`, `tb_foto` WHERE `tb_album`.`id_album` = ".$_POST['excluir']." AND `tb_foto`.`id_album` = ".$_POST['excluir']."; SET foreign_key_checks = 1;";
  $result= mysqli_query($conexao, $sql);
}

?>
