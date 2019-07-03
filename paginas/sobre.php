<?php
require_once("../objetos/obj_processaLogin.php");
include("../objetos/obj_validaLogin.php");
session_start();

if (isset($_SESSION["foto"])){
  echo '<div class="alertSucesso">
  <p>ALBUM CRIADO COM SUCESSO !!!</p>
  </div>';
  unset($_SESSION["foto"]);
  $page = $_SERVER['PHP_SELF'];
  $sec = "10";
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
    <link rel="stylesheet" type="text/css" href="../sass/css/sobre.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../js/uploadImagens.js" charset="utf-8"></script>
    <!-- <script src="../js/backgroundChiado.js" charset="utf-8"></script> -->
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
      <form class="" id="form_cadastra" action="../objetos/obj_sobre.php" method="post" enctype="multipart/form-data">
        <textarea name="descricaoAutor" rows="4" cols="80" placeholder="Descrição do autor." maxlength='140'></textarea>

        <div class="imagensContainer">
          <div class="box__input">
            <input class="boxFile" type="file" name="fotografo[]" id="file" data-multiple-caption="{count} arquivos selecionados"/>
            <label for="file"><strong>Selecione um arquivo&nbsp;</strong><span class="box__dragndrop">&nbsp;ou arraste ele aqui</span>.</label>

          </div>

          <div class="box__uploading">Uploading&hellip;</div>
          <div class="box__success">Done!</div>
          <div class="box__error">Error! <span></span>.</div>
        </div>

        <section>
          <button type="submit" name="button">Finalizar</button>

        </section>
      </form>
    </main>
  </body>
