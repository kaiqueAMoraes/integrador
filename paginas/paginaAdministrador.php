<?php
    session_start();
    require_once("../objetos/obj_processaLogin.php");
    include("../objetos/obj_validaLogin.php");
?>

<!DOCTYPE html>
  <html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/paginaAdmnistrador.css">
  </head>
  <body>
    <header>
      <div id="voltar" title="Voltar á pagina anterior">
        <a href="./index.html"><span>&#60;</span></a>
      </div>
      <h1>Menu administrador</h1>
    </header>
    <main>
      <a href="editarAlbuns.php">Editar Albuns</a>
      <a href="editarSelecionados.php">Editar Selecionados</a>
      <a href="sobre.html">Sobre</a>
      <a href="contato.html">Contato</a>
    </main>
    <footer>

    </footer>
  </body>
