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
    <link rel="stylesheet" type="text/css" href="../sass/css/portifolioCompleto.css">
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
    <script src="../js/portifolio.js" charset="utf-8"></script>
  </head>
<body>
  <canvas id="noise" class="noise"></canvas>

  <header>
    <div id="voltar" title="Voltar á pagina anterior">
      <a href="../index.html"><span>&#60;</span></a>
    </div>
    <h1>Portifolio completo</h1>
    <input type="search" name="" value="" id="procurar" title="Pressione enter para realizar a pesquisa" placeholder="pesquisar">
    <section class="sectionTags">
      <!-- <div class="tagArea"> -->
        <label><input type="checkbox" name="checkbox" value="value">casamento</label>
        <label><input type="checkbox" name="checkbox" value="value">infantil</label>
        <label><input type="checkbox" name="checkbox" value="value">eventos</label>
        <label><input type="checkbox" name="checkbox" value="value">mulher</label>
        <label><input type="checkbox" name="checkbox" value="value">homem</label>
        <label><input type="checkbox" name="checkbox" value="value">ensaio</label>
        <label><input type="checkbox" name="checkbox" value="value">pets</label>
        <label><input type="checkbox" name="checkbox" value="value">roberto carlos</label>
      <!-- </div> -->


    </section>
  </header>
    <main>
      <section class="container">

        <?php

          while($album = mysqli_fetch_assoc($result)){

          

          echo "<div
                  style=\"background-image: src='../albuns/".$album['dir']."/".$album['arq']."'; background-align: cover;\" class='album'>
                </div>";
          }
        ?>

      </section>
    </main>
<footer>

</footer>
</body>
