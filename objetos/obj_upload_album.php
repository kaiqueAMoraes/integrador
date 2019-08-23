<?php
require_once("obj_conexao_bd.php");
session_start();

    $conexao = AbreConexaoBD();

    $nomeAlbum = $_POST["nomeAlbum"];
    $descricaoAlbum = $_POST["descricaoAlbum"];
    $diretorio = "../albuns/$nomeAlbum";
    $mensagem= '';


if (is_dir($diretorio)) {
    session_start();
    $_SESSION["repetido"] = true;
    header("location:../paginas/novoAlbum.php");

}
else {

    mkdir($diretorio, 0777);

    $sucessoUpload = true;

    $sql = "INSERT INTO tb_album(nome,descricao) VALUES ('".$nomeAlbum."','".$descricaoAlbum."');";
    if(mysqli_query($conexao, $sql)) {
        $idAlbum = mysqli_insert_id($conexao);

        if (isset($_FILES["capa"])){
          $capa_tmp = $_FILES["capa"]["tmp_name"][0];
          $nomeCapa = $_FILES["capa"]["name"][0];
          $somenteNomeCapa = md5(Date("dmYHis").pathinfo($nomeCapa, PATHINFO_FILENAME));
          $somenteExtensaoCapa = pathinfo($nomeCapa, PATHINFO_EXTENSION);
          $nomeCapaCriptografado = "$somenteNomeCapa.$somenteExtensaoCapa";
          $foto_capa= 1;

          $uploadCapa = move_uploaded_file($capa_tmp, $diretorio . "/" . $nomeCapaCriptografado);

          if ($uploadCapa) {
              $sql = "INSERT INTO tb_foto(id_album, nome, foto_capa) VALUES ($idAlbum, '".$nomeCapaCriptografado."', $foto_capa);";
              mysqli_query($conexao, $sql);

         }
          else {
              $sucessoUpload = false;
              echo "Erro no upload!";
          }

        }

        if (isset($_FILES["foto"])) {
            // fazer o for para o multiple
            for ($i = 0; $i < count($_FILES["foto"]["name"]); $i++)
            {
                $foto_tmp = $_FILES["foto"]["tmp_name"][$i];
                $nomeFoto = $_FILES["foto"]["name"][$i];

                $somenteNomeFoto = md5(Date("dmYHis").pathinfo($nomeFoto, PATHINFO_FILENAME));
                $somenteExtensaoFoto = pathinfo($nomeFoto, PATHINFO_EXTENSION);
                $nomeFotoCriptografado = "$somenteNomeFoto.$somenteExtensaoFoto";

                $uploadFoto = move_uploaded_file($foto_tmp, $diretorio . "/" . $nomeFotoCriptografado);
                if ($uploadFoto) {
                    $sql = "INSERT INTO tb_foto(id_album, nome) VALUES ($idAlbum, '".$nomeFotoCriptografado."');";
                    mysqli_query($conexao, $sql);
                }
                else {
                    $sucessoUpload = false;
                    echo "Erro no upload!";
                }

            }
        }

        if(isset($_POST["tag"]) != ""){

            if (is_array($_POST["tag"]))
            {

                while(list($key,$value) = each($_POST["tag"]))
                {
                    $sql ="INSERT INTO tb_tag (id_album,nome) VALUES ($idAlbum,'".$value."');";
                    $resultado= mysqli_query($conexao, $sql);


                }
            }

        }

        if ($sucessoUpload){
            session_start();
            $_SESSION["upload"] = true;

            header("location:../paginas/novoAlbum.php");
        } else {
            session_start();
            $_SESSION["erro"] = true;

            header("location:../paginas/novoAlbum.php");
        }

    }

    else {
        session_start();
        $_SESSION["erro"] = true;

        header("location:../paginas/novoAlbum.php");
    }

    mysqli_close($conexao);
}
?>
