<?php include("../objetos/obj_validaLogin.php");


  require_once("../objetos/obj_conexao_bd.php");
  $conexao = AbreConexaoBd();

   $sql= "Select id_sobre,foto,texto from tb_sobre ;";
  $result= mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sobre mim</title>
    <link type="text/css" rel="stylesheet" href="../sass/css/sobreMim.css">
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
  </head>
  <body>
    <canvas id="noise" class="noise"></canvas>
    <header>
      <div id="voltar" title="Voltar á pagina anterior">
        <a href="../index.html"><span>&#60;</span></a>
      </div>
    </header>
<main>
  <div class="containerInfoAlbum">
    <h1></h1>
    <p><?php

      while($album = mysqli_fetch_assoc($result)){
          echo "<div class='albumEditar'>";
        echo "<a title='excluir album.' class='deleteButton' href='../objetos/obj_deleteAlbum.php?id_album=".$album['id_album']."&dir=".$album['dir']."'><span>X</span></a>";


      echo "<a href= 'album.php?id_album=".$album['id_album']."'><div
            style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."');
            background-repeat: no-repeat; background-size: cover; background-position: center;
            filter: grayscale(100%); \" class='albumEditar' >
               </div></a>";
               echo "</div>";

    } </p>
  </div>
</main>
  </body>
</html>
