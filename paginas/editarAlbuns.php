<?php
  include("../objetos/obj_conexao_bd.php");

  $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";

$result= mysqli_query(AbreConexaoBd(), $sql);

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Albuns</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/editarAlbuns.css">
    <script type="text/javascript" src="../js/criarDiv.js"></script>
  </head>
<body>
  <header>
    <div id="voltar" title="Voltar á pagina anterior">
      <a href="paginaAdministrador.html"><span>&#60;</span></a>
    </div>

    <h1>Editar Albuns.</h1>

  </header>
    <main>
      <div class="button" id="button" title="Criar um novo album"><span>&#x2b;</span></div>
      <section class="container">
        <?php
          while($album = mysqli_fetch_assoc($result)){

         echo  "<div class='album'>
               <img src='../albuns/".$album['dir']."/".$album['arq']."' width='200' height='200'/>

                </div>";


          }

        ?>

        <div class="album"></div>
        <div class="album"></div>
        <div class="album"></div>
        <div class="album"></div>
        <div class="album"></div>
      </section>
    </main>
<footer></footer>
</body>
