<?php
    // inicia a sessão do php
    session_start();

    if (isset($_SESSION["user"]) && $_SESSION["user"] > 0) {
        // se já estiver logado, redireciona para a pagina inicial
        header("location:./paginas/paginaAdministrador.php");
    }


    require_once("./objetos/obj_processaLogin.php");

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" type="text/css" href="./sass/css/login.css">
    <script src="./js/backgroundChiado.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <div id="voltar" title="Voltar á pagina anterior">
        <a href="../index.html"><span>&#60;</span></a>
      </div>
    </header>
    <canvas id="noise" class="noise"></canvas>
    <main>

      <?php

      if (!empty($_SESSION["erro"])){
        echo '<div class="erroSession">
        <p>USUARIO OU SENHA INCORRETO !!!</p>
        </div>';
        unset($_SESSION["erro"]);
      }
      ?>
      <section class="conteudo">
        <form action="./objetos/obj_processaLogin.php" method="post">
                <input type="text" id="usuario" placeholder="usuario" name="nome">
                <input type="password" id="senha" placeholder="senha" name="senha">
                <input id="enviaForm" type="submit"  value="enviar">
        </form>
      </section>
    </main>
  </body>
