<!-- https://picsum.photos/200/300?grayscale -->
<?php
include("../objetos/obj_conexao_bd.php");


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Anderson Rodrigues</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/album.css">
   <script src="../js/backgroundChiado.js" charset="utf-8"></script>
  </head>
<body>
  <canvas id="noise" class="noise"></canvas>
  <header>
    <div id="voltar" title="Voltar á pagina anterior">
      <a href="portifolioCompleto.php"><span>&#60;</span></a>
    </div>
    <div id="containerInfoAlbum">
      <div id="tituloAlbum">
        <h1>
          <?php
              $buscaTitulo = "SELECT nome, id_album FROM tb_album WHERE id_album  = ".$_GET["id_album"];
              $queryTitulo= mysqli_query(AbreConexaoBd(),$buscaTitulo);

              if($titulo = mysqli_fetch_assoc($queryTitulo)){
                echo $titulo['nome'];
              }
          ?>
        </h1>
      </div>
      <div id="descricaoAlbum">
        <p>
          <?php
              $buscaDescricao = "SELECT descricao, id_album FROM tb_album WHERE id_album  = ".$_GET["id_album"];
              $queryDescricao= mysqli_query(AbreConexaoBd(),$buscaDescricao);

              if($descricao = mysqli_fetch_assoc($queryDescricao)){
                echo $descricao['descricao'];
              }
          ?>

        </p>
      </div>
    </div>
  </header>
  <main>

  <?php

  //  $sql= "SELECT * FROM tb_foto WHERE id_album = ".$_GET["id_album"];

  echo $_GET["id_album"];

    $sql = "Select tb_album.nome as dir,tb_foto.nome as foto,tb_foto.id_foto
            from tb_album inner join tb_foto
            on tb_album.id_album = tb_foto.id_album
            WHERE tb_foto.id_album = ".$_GET["id_album"];

    $resultado= mysqli_query(AbreConexaoBd(),$sql);

    while($album = mysqli_fetch_assoc($resultado)){

   echo "<img src='../albuns/".$album['dir']."/".$album['foto']."'>";
    }


   ?>

  </main>
<footer>
<a href="#">Proximo Album</a>
</footer>
</body>
