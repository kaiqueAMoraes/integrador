<?php
  include("../objetos/obj_conexao_bd.php");

  $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq, tb_album.id_album
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_album.selecionado = 1
         AND tb_foto.foto_capa = 1";
  $result= mysqli_query(AbreConexaoBd(), $sql);


 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr" >
  <head>
    <meta charset="utf-8">
    <title>trabalhos selecionados</title>
    <link type="text/css" rel="stylesheet" href="../sass/css/trabalhosSelecionados.css">
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/jquery-scrollify/jquery.scrollify.js"></script>
    <script src="../js/trabalhosSelecionados.js" charset="utf-8"></script>
    <script src="../node_modules/scrollreveal/dist/scrollreveal.js" charset="utf-8"></script>

  </head>

  <body >
    <canvas id="noise" class="noise"></canvas>
    <section class="container">
      <header>
        <div id="voltar" title="Voltar á pagina anterior">
          <a href="../index.php"><span>&#60;</span></a>
        </div>
      </header>
      <main id="container" >


            <?php
              while($album = mysqli_fetch_assoc($result)){
                echo "<section class='sectionAlbum'>";
              echo "<a href= 'album.php?id_album=".$album['id_album']."'><div class='redirecionaAlbumPagina' style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."');
              background-repeat: no-repeat; background-size: cover; background-position: center; filter: grayscale(100%); \" class='imagemCapa'>
                    </div></a>";

              echo "<h1 style='display: inline-block;'>";

                    $buscaTitulo = "SELECT nome, id_album FROM tb_album WHERE id_album = ".$album['id_album'];
                    $queryTitulo= mysqli_query(AbreConexaoBd(),$buscaTitulo);

                    if($titulo = mysqli_fetch_assoc($queryTitulo)){
                     echo  "<a href= 'album.php?id_album=".$album['id_album']."'>". $titulo['nome']. "</a>";
                    }

                echo "</h1></section>";

                }
               ?>


      </main>
    </section>
  </body>
</html>
<script src="../js/adicionaCorImagem.js"></script>
