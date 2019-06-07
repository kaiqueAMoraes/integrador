<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/login.css";
  </head>
  <body>
    <header>
      <div id="voltar" title="Voltar á pagina anterior">
        <a href="../index.html"><span>&#60;</span></a>
      </div>
    </header>
    <main>
      <section class="conteudo">
        <form action="processaLogin.php" method="post">
                <input type="text" id="usuario" name="nome" placeholder="usuario">
                <input type="password" name="senha" id="senha" placeholder="senha">
                <input id="enviaForm" type="submit"  value="enviar">
                <span class="cursor"></span>
                <span class="cursor"></span>
        </form>
        <a href="#" id="refazerSenha" >Esqueci a senha!</a>
      </section>
    </main>
    <footer>

    </footer>
  </body>
