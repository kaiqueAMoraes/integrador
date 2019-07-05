<?php
require_once("../objetos/obj_conexao_bd.php");
$conexao = AbreConexaoBd();

if(isset($_POST["selecionado"]) != ""){

    if (is_array($_POST["selecionado"]))
    {
        while(list($key,$value) = each($_POST["selecionado"]))
        {
            $sql =" UPDATE tb_album SET selecionado = 1 WHERE  tb_album.id_album = ".$value;
            if( mysqli_query($conexao, $sql)){
                    $_SESSION["select"] = true;

                }
        }

    }

}

 ?>
