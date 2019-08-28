<?php
require_once("../objetos/obj_processaLogin.php");
include("../objetos/obj_validaLogin.php");

if (isset($_SESSION["contato"])){
  echo '<div class="alertSucesso">
  <p>CONTATO ATUALIZADO COM SUCESSO !!!</p>
  </div>';
  unset($_SESSION["contato"]);
  $page = $_SERVER['PHP_SELF'];
  $sec = "3";
  header("Refresh: $sec; url=$page");

}

if(isset($_SESSION["erro"])){
    echo '<div class="alertErro">
    <p>ERRO NO UPLOAD !!!</p>
    </div>';
    unset($_SESSION["erro"]);
}



 ?>

<!DOCTYPE html>
  <html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/contato.css">
    <!-- <script src="../js/backgroundChiado.js" charset="utf-8"></script> -->

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

    <main>
      <form class="" action="../objetos/obj_contato.php" method="post">

        <input type="text" id="instagram" name="instagram" value="" placeholder="url do instagram" maxlength="50">
        <input type="text" id="facebook" name="facebook" value="" placeholder="url do facebook" maxlength="50">
        <input type="text" id="email" name="email" value="" placeholder="url do email" maxlength="50">
        <section>
          <button type="submit" name="button">Finalizar</button>

        </section>
      </form>
    </main>
  </body>
