<?php

    require_once("obj_conexao_bd.php");
    $conexao = AbreConexaoBD();

    $nomeAlbum = $_POST["nomeAlbum"];
    $descricaoAlbum = $_POST["descricaoAlbum"];

    $diretorio = "../albuns/$nomeAlbum";

    if (is_dir($diretorio)) {
            echo "A pasta '$diretorio' já existe.";
            echo "<br>";
            echo "<a href='javascript:history.back()'>Voltar</a>";
    }
    else {

        mkdir($diretorio, 0777);

        $sql = "INSERT INTO tb_album(nome,descricao) VALUES ('".$nomeAlbum."','".$descricaoAlbum."');";
        if(mysqli_query($conexao, $sql)) {
            $idAlbum = mysqli_insert_id($conexao);

            if (isset($_FILES["foto"])) {
                // fazer o for para o multiple

                for ($i = 0; $i < count($_FILES["foto"]["name"]); $i++)
                {

                    $foto_tmp = $_FILES["foto"]["tmp_name"][$i];
                    $nomeFoto = $_FILES["foto"]["name"][$i];

                    $somenteNomeFoto = md5(Date("dmYHis").pathinfo($nomeFoto, PATHINFO_FILENAME));
                    $somenteExtensaoFoto = pathinfo($nomeFoto, PATHINFO_EXTENSION);
                    $nomeFotoCriptografado = "$somenteNomeFoto.$somenteExtensaoFoto";

                    $upload = move_uploaded_file($foto_tmp, $diretorio . "/" . $nomeFotoCriptografado);

                    if ($upload) {
                        $sql = "INSERT INTO tb_foto(id_album, nome) VALUES ($idAlbum, '".$nomeFotoCriptografado."');";
                        if(mysqli_query($conexao, $sql)) {
                            echo "Upload realizado com sucesso!";
                        }
                        else
                            echo "Erro no banco de dados!";
                    }
                    else {
                        echo "Erro no upload!";
                    }

                }
            }

            if($_POST["tag"] != ""){

                if (is_array($_POST["tag"]))
                {

                    while(list($key,$value) = each($_POST["tag"]))
                    {
                        $sql ="INSERT INTO tb_tag (id_album,nome) VALUES ($idAlbum,'".$value."');";
                        if(mysqli_query($conexao, $sql)) {
                            echo "Upload realizado com sucesso!";
                        }
                        else
                            echo "Erro no banco de dados!";
                    }
                }
            }
        }
        else {
            echo "Erro no banco de dados!";
        }

        mysqli_close($conexao);
    }
?>
