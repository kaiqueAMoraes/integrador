<?php
require_once("../objetos/obj_processaLogin.php");
include("../objetos/obj_validaLogin.php");


  require_once("../objetos/obj_conexao_bd.php");
  $conexao = AbreConexaoBd();

   $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq, tb_album.id_album
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";
  $result= mysqli_query($conexao, $sql);


  if (isset($_SESSION["apagado"])){
    echo '<div class="alertSucesso">
    <p>ALBUM APAGADO COM SUCESSO !!!</p>
    </div>';
    unset($_SESSION["apagado"]);
    $page = $_SERVER['PHP_SELF'];
    $sec = "3";
    header("Refresh: $sec; url=$page");
  }

//  include("../objetos/obj_deleteAlbum.php");
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Albuns</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/editarAlbuns.css">
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

  </head>

    <body>
    <header>
      <div id="voltar" title="Voltar á pagina inicial do Administrador">
        <a href="./paginaAdministrador.php"><span>&#60;</span></a>
      </div>

      <div class="blockOfWidth"></div>

      <div class="boxHeader underline-from-center">
        <a href="editarSelecionados.php">Editar Selecionados</a>
      </div>

      <div class="boxHeader underline-from-center">
        <a href="editarAlbuns.php">Editar Albuns</a>
      </div>

      <div class="boxHeader boxMenor underline-from-center">
        <a href="sobre.php">Sobre</a>
      </div>

      <div class="boxHeader boxMenor underline-from-center">
        <a href="contato.php">Contato</a>
      </div>

    </header>
    <canvas id="noise" class="noise"></canvas>
    <main>
      <div class="button" id="button" title="Criar um novo album"><span>&#x2b;</span></div>
      <section class="container">
        <?php

//echo "<form method='post' action='../objetos/obj_deleteAlbum.php'>";




          while($album = mysqli_fetch_assoc($result)){
              echo "<div class='albumEditar'>";
            echo "<a title='excluir album.' class='deleteButton' href='../objetos/obj_deleteAlbum.php?id_album=".$album['id_album']."&dir=".$album['dir']."'><span>X</span></a>";


          echo "<a href= 'album.php?id_album=".$album['id_album']."'><div
                style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."');
                background-repeat: no-repeat; background-size: cover; background-position: center;
                filter: grayscale(100%); \" class='albumEditar' >
                   </div></a>";
                   echo "</div>";

        }

  //<input type='hidden' name='excluir' id='".$album['id_album']."' value='".$album['id_album']."'>



        ?>
      </section>
    </main>
<footer></footer>
</body>
<script type="text/javascript" src="../js/criarDiv.js"></script>
</html>
