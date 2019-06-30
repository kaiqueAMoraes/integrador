<<<<<<< HEAD
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

=======
>>>>>>> master
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
          <a href="../index.html"><span>&#60;</span></a>
        </div>
      </header>
      <main id="container" >

<<<<<<< HEAD

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




          <section class="sectionAlbum">

              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1200/880?grayscale');"  class="imagemCapa"></div>
              <h1 class="redirecionaAlbumPagina">titulo album</h1>
          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1200/700?grayscale');" class="imagemCapa">
              </div>
              <h1 class="redirecionaAlbumPagina" >titulo album</h1>
          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1201/700?grayscale');" class="imagemCapa"></div>
              <h1 class="redirecionaAlbumPagina">titulo album</h1>
          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1203/700?grayscale');" class="imagemCapa"></div>
              <h1 class="redirecionaAlbumPagina" >titulo album</h1>
          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1202/700?grayscale');" class="imagemCapa"></div>
              <h1 class="redirecionaAlbumPagina" >titulo album</h1>
          </section>
=======
          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/2200/1200?grayscale');" class="imagemCapa">
                <h1 class="uph1">01</h1>
                <h1 class="downh1">05</h1>
              </div>
              <h1 class="redirecionaAlbumPagina">Lorem Ipsum</h1>

          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1200/880?grayscale');"  class="imagemCapa">
                <h1 class="uph1">02</h1>
                <h1 class="downh1">05</h1>
              </div>
              <h1 class="redirecionaAlbumPagina">Lorem Ipsum</h1>
          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1200/700?grayscale');" class="imagemCapa">
                <h1 class="uph1">03</h1>
                <h1 class="downh1">05</h1>
              </div>
              <h1 class="redirecionaAlbumPagina" >Lorem Ipsum</h1>
          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1201/700?grayscale');" class="imagemCapa">
                <h1 class="uph1">04</h1>
                <h1 class="downh1">05</h1>
              </div>
              <h1 class="redirecionaAlbumPagina">Lorem Ipsum</h1>
          </section>

          <section class="sectionAlbum">
              <div class="redirecionaAlbumPagina" style="background-image: url('https://picsum.photos/1203/700?grayscale');" class="imagemCapa">
                <h1 class="uph1">05</h1>
                <h1 class="downh1">05</h1>
              </div>
              <h1 class="redirecionaAlbumPagina" >Lorem Ipsum</h1>
          </section>

>>>>>>> master
      </main>
    </section>
  </body>
</html>
