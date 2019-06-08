<?php

    require_once("../objetos/obj_processaLogin.php");

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/login.css";>
    <link rel="stylesheet" type="text/css" href="../sass/css/mainCss.css";>
  </head>
  <body>
    <main>
      <section class="conteudo">
        <form action="../objetos/obj_processaLogin.php" method="post">
                <input type="text" id="usuario" placeholder="usuario" name="nome">
                <input type="password" id="senha" placeholder="senha" name="senha">
                <input id="enviaForm" type="submit"  value="enviar">
                <span class="cursor"></span>
                <span class="cursor"></span>
        </form>
        <div id="logoImagem"></div>
        <a href="#" id="refazerSenha" >Esqueci a senha!</a>
        <a id="voltar" href="../index.html">voltar</a>
      </section>
    </main>
  </body>
  
