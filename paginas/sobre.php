<?php
header('Content-type: text/html; charset=iso-8859-1');
require_once("../objetos/obj_processaLogin.php");
include("../objetos/obj_validaLogin.php");

require_once("../objetos/obj_conexao_bd.php");

$conexao = AbreConexaoBd();

$sql = "select * from tb_sobre";

$res = mysqli_query($conexao, $sql);

if(mysqli_num_rows($res) ==  1 ){

   $linha = mysqli_num_rows($res);

}else{

  $linha = 0;
}

if (isset($_SESSION["foto"])){
  echo '<div class="alertSucesso">
  <p>SOBRE CRIADO COM SUCESSO !!!</p>
  </div>';
  unset($_SESSION["foto"]);
  $page = $_SERVER['PHP_SELF'];
  $sec = "3";
  header("Refresh: $sec; url=$page");
}

if(isset($_SESSION["repetido"])){
    echo '<div class="alertAtencao">
    <p>JÁ EXISTE O MSM ARQUIVO!!!</p>
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
}


?>

<!DOCTYPE html>
  <html lang="pt-br" dir="ltr">
  <head>
    <meta charset="iso-8859-1">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/sobre.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../js/uploadImagens.js" charset="utf-8"></script>
    <!-- <script src="../js/backgroundChiado.js" charset="utf-8"></script> -->
  </head>
  <body>
    <header>
      <div id="voltar" title="Sair do modo Administrador">
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

      <div class="boxHeader boxMenor underline-from-center">
        <a href="contato.php">Contato</a>
      </div>

    </header>

    <main>
      <form class="" id="form_cadastra" action="../objetos/obj_sobre.php" method="post" enctype="multipart/form-data">

        <textarea name="descricaoAutor" rows="4" cols="80" placeholder="Descri&ccedil;&atilde;o do autor." maxlength='400' ></textarea>

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
          <button type="submit" name="sobreEnviar">Finalizar</button>
          <input type="hidden" name="tipo" id="tipo" value="<?php  echo $linha ?>"

        </section>
      </form>
    </main>
  </body>
