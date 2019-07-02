<?php
  require_once("../objetos/obj_conexao_bd.php");
  $conexao = AbreConexaoBd();

   $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq, tb_album.id_album
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";
  $result= mysqli_query($conexao, $sql);

//  include("../objetos/obj_deleteAlbum.php");
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Albuns</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/editarAlbuns.css">
    <script type="text/javascript" src="../js/criarDiv.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
<body>
  <header>

    <div id="voltar" title="Voltar á pagina anterior">
      <a href="paginaAdministrador.php"><span>&#60;</span></a>
    </div>

    <h1>Editar Albuns.</h1>

  </header>
    <main>
      <div class="button" id="button" title="Criar um novo album"><span>&#x2b;</span></div>
      <section class="container">
        <?php
//echo "<form method='post' action='../objetos/obj_deleteAlbum.php'>";
    echo "<div>";

          while($album = mysqli_fetch_assoc($result)){
            echo "<a href='../objetos/obj_deleteAlbum.php?id_album=".$album['id_album']."'>Excluir</a>";

          echo "<a href= 'album.php?id_album=".$album['id_album']."'><div
                style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."');
                background-repeat: no-repeat; background-size: cover; background-position: center;
                filter: grayscale(100%); \" class='album'>
                   </div></a>";

        }
  //<input type='hidden' name='excluir' id='".$album['id_album']."' value='".$album['id_album']."'>
      //echo "</form>";
       echo "</div>";
        ?>
      </section>
    </main>
<footer></footer>
</body>
