<?php
    // inicia a sessão do php
    session_start();

    if (isset($_SESSION["user"]) && $_SESSION["user"] > 0) {
        // se já estiver logado, redireciona para a pagina inicial
        header("location:./paginaAdministrador.php");
    }


    require_once("../objetos/obj_processaLogin.php");

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/login.css";>
    <link rel="stylesheet" type="text/css" href="../sass/css/mainCss.css";>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php

          if (!empty($_SESSION["erro"])){
                 echo '<div class="alert alert-danger" role="alert">
                        USUARIO OU SENHA INCORRETO !!!
                     </div>';
                 unset($_SESSION["erro"]);
              }
       ?>
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
