<?php
session_start();

if (isset($_SESSION["upload"])){
  echo '<div>
  <p>ALBUM CRIADO COM SUCESSO !!!</p>
  </div>';
  unset($_SESSION["upload"]);
}
if(isset($_SESSION["repetido"])){
    echo '<div>
    <p>JÁ EXISTE UM ALBUM COM O MESMO NOME !!!</p>
    </div>';
    unset($_SESSION["repetido"]);
}
if(isset($_SESSION["erro"])){
    echo '<div>
    <p>ERRO NO UPLOAD !!!</p>
    </div>';
    unset($_SESSION["erro"]);
}

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Criar um novo album</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/novoAlbum.css">
    <script src="../js/frameworks/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src= "../js/valida.js"></script>
    <script src="../js/uploadImagens.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container">
        <div id="voltar" title="Voltar á pagina anterior">
          <a href="./editarAlbuns.html"><span>&#60;</span></a>
        </div>
        <h1>Adicionar Album</h1>
      </div>
    </header>
    <main>

        <form class="" id="form_cadastra" action="../objetos/obj_upload_album.php" method="post" enctype="multipart/form-data">
          <section class="container">

            <input type="text" id="nomeAlbum" name="nomeAlbum" value="" placeholder="Titulo do album" maxlength="30">

            <textarea name="descricaoAlbum" rows="4" cols="80" placeholder="Descrição do album." maxlength='140'></textarea>

            <section class="sectionTags">
              <div class="button" id="button" title="Criar nova tag"><span>&#x2b;</span></div>

                <label><input type="checkbox" name="tag[]" value="casamento">casamento</label>
                <label><input type="checkbox" name="tag[]" value="infantil">infantil</label>
                <label><input type="checkbox" name="tag[]" value="eventos">eventos</label>
                <label><input type="checkbox" name="tag[]" value="mulher">mulher</label>
                <label><input type="checkbox" name="tag[]" value="homem">homem</label>
                <label><input type="checkbox" name="tag[]" value="ensaio">ensaio</label>
                <label><input type="checkbox" name="tag[]" value="pets">pets</label>

            </section>
            <section class="box">
              <div >
                <input  type="file" name="capa[]" id="capa" />
              </div>

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
</html>
