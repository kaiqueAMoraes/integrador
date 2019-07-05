<?php
require_once("../objetos/obj_processaLogin.php");
include("../objetos/obj_validaLogin.php");

if (isset($_SESSION["upload"])){
  echo '<div class="alertSucesso">
  <p>ALBUM CRIADO COM SUCESSO !!!</p>
  </div>';
  unset($_SESSION["upload"]);
  $page = $_SERVER['PHP_SELF'];
  $sec = "3";
  header("Refresh: $sec; url=$page");
}
if(isset($_SESSION["repetido"])){
    echo '<div class="alertAtencao">
    <p>JÁ EXISTE UM ALBUM COM O MESMO NOME !!!</p>
    </div>';
    unset($_SESSION["repetido"]);
    $page = $_SERVER['PHP_SELF'];
    $sec = "4";
    header("Refresh: $sec; url=$page");
}
if(isset($_SESSION["erro"])){
    echo '<div class="alertErro">
    <p>ERRO NO UPLOAD !!!</p>
    </div>';
    unset($_SESSION["erro"]);
    $page = $_SERVER['PHP_SELF'];
    $sec = "4";
    header("Refresh: $sec; url=$page");
}

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Criar um novo album</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/novoAlbum.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../js/uploadImagens.js" charset="utf-8"></script>
    <!-- <script src="../js/backgroundChiado.js" charset="utf-8"></script> -->
  </head>
  <body>
    <!-- <canvas id="noise" class="noise"></canvas> -->
    <header>
      <div class="container">
        <div id="voltar" title="Voltar á pagina anterior">
          <a href="./editarAlbuns.php"><span>&#60;</span></a>
        </div>
        <h1>Adicionar Album</h1>
      </div>
    </header>
    <main>

        <form class="" id="form_cadastra" action="../objetos/obj_upload_album.php" method="post" enctype="multipart/form-data">
          <section class="container">

            <input type="text" id="nomeAlbum" name="nomeAlbum" value="" placeholder="Titulo do album" maxlength="25">

            <textarea name="descricaoAlbum" rows="4" cols="80" placeholder="Descrição do album." maxlength='140'></textarea>

            <section class="sectionTags">
                <!--
              <div class="button" id="button" title="Criar nova tag"><span>&#x2b;</span></div>

                <label><input type="checkbox" name="tag[]" value="casamento">casamento</label>
                <label><input type="checkbox" name="tag[]" value="infantil">infantil</label>
                <label><input type="checkbox" name="tag[]" value="eventos">eventos</label>
                <label><input type="checkbox" name="tag[]" value="mulher">mulher</label>
                <label><input type="checkbox" name="tag[]" value="homem">homem</label>
                <label><input type="checkbox" name="tag[]" value="ensaio">ensaio</label>
                <label><input type="checkbox" name="tag[]" value="pets">pets</label>
                -->
            </section>

            <section class="sectionTags">
                <div >
                  <input class="inputXX" type="file" name="capa[]" id="capa" />
                </div>
            </section>
            <section class="box">


            <div class="imagensContainer">
              <div class="box__input">
                <input class="boxFile" type="file" name="foto[]" id="file" data-multiple-caption="{count} arquivos selecionados" multiple />
                <label for="file"><strong>Selecione um arquivo&nbsp;</strong><span class="box__dragndrop">&nbsp;ou arraste ele aqui</span>.</label>

              </div>

              <div class="box__uploading">Uploading&hellip;</div>
              <div class="box__success">Done!</div>
              <div class="box__error">Error! <span></span>.</div>
            </div>

              <!-- <h2>capa do album</h2> -->
            </section>
          <br>
          <button type="submit" name="button">Finalizar</button>
        </section>
      </form>
    </main>
  </body>
  <script src= "../js/valida.js"></script>
</html>
