<?php
    // session_start();
    require_once("../objetos/obj_processaLogin.php");
    include("../objetos/obj_validaLogin.php");
?>

<!DOCTYPE html>
  <html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/paginaAdministrador.css">
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <div id="voltar" title="Voltar á pagina anterior">
        <a  href="../objetos/obj_deslogar.php?x=x"><span>x</span></a>
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

      <!--<div class="boxHeader boxMenor underline-from-center">
        <a href="contato.php">Contato</a>
      </div>-->

    </header>
    <canvas id="noise" class="noise"></canvas>
    <main>
    </main>
    <footer>

    </footer>
  </body>
