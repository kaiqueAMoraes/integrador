<?php
  include("../objetos/obj_conexao_bd.php");
  $conexao = AbreConexaoBd();

  $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq, tb_album.id_album
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";
  $result= mysqli_query($conexao, $sql);

  include("../objetos/obj_selecionado.php");

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Selecionados</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/editarAlbuns.css">

    <script type="text/javascript" src="../js/criarDiv.js"></script>
  </head>
<body>
  <header>
    <div id="voltar" title="Voltar á pagina anterior">
      <a href="paginaAdministrador.php"><span>&#60;</span></a>
    </div>

    <h1>Editar Selecionados.</h1>

  </header>
    <main>
      <!-- <div class="button" id="button" title="Criar um novo album"><span>&#x2b;</span></div> -->
      <section class="container">
        <?php
          echo "<form method='post'>";

          while($album = mysqli_fetch_assoc($result)){

          echo "<a href= 'album.php?id_album=".$album['id_album']."'><div
                style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."'); background-repeat: no-repeat; background-size: cover; background-position: center; filter: grayscale(100%); \" class='album'>

                <label><input type='checkbox' name='selecionado[]' id='".$album['id_album']."' value='".$album['id_album']."'>Selecionado</label>


                </div></a>";
          }

          echo "<input type='submit' value='Adicionar'></form>";
        ?>
      </section>
    </main>
<footer></footer>
</body>
