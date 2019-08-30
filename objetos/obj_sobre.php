<?php

require_once("obj_conexao_bd.php");
session_start();

    $conexao = AbreConexaoBD();
    $descricao = $_POST["descricaoAutor"];
    $diretorio = "../fotografo/";


if (isset($_POST["descricaoAutor"]) || isset($_FILES["fotografo"])) {
    $sql= "UPDATE tb_sobre SET";

      if(strlen($_POST["descricaoAutor"]) >= 1){
        $sql .= " texto= '".$_POST['descricaoAutor']."'";
        }
      if((strlen($_POST["descricaoAutor"]) >= 1) && strlen($_FILES["fotografo"][name][0]))
      {
        $sql .= " , ";
      }
      if (isset($_FILES["fotografo"])){
        $fotografo_tmp = $_FILES["fotografo"]["tmp_name"][0];
        $nomeFotografo = $_FILES["fotografo"]["name"][0];

        $somenteNomeFotografo = md5(Date("dmYHis").pathinfo($nomeFotografo, PATHINFO_FILENAME));
        $somenteExtensaoFotografo = pathinfo($nomeFotografo, PATHINFO_EXTENSION);
        $nomeFotografoCriptografado = "$somenteNomeFotografo.$somenteExtensaoFotografo";

        $uploadFotografo = move_uploaded_file($fotografo_tmp, $diretorio . "/" . $nomeFotografoCriptografado);

        if ($uploadFotografo) {
            $sql .= " foto = ('".$nomeFotografoCriptografado."')";
          }
        }




        if (mysqli_query($conexao, $sql)){
            session_start();
            $_SESSION["foto"] = true;

            header("location:../paginas/sobre.php");

        }



}
else {
    session_start();
    $_SESSION["erro"] = true;

    header("location:../paginas/sobre.php");
    mysqli_close($conexao);
}
?>
