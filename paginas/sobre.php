<!DOCTYPE html>
  <html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/sobre.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
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
      <form class="" action="#" method="post">
        <div>
          <input  type="file" name="autorCapa[]" id="aautorCapa" />
        </div>
        <textarea name="descricaoAutor" rows="4" cols="80" placeholder="Descrição do autor." maxlength='140'></textarea>
        <button type="submit" name="button">Finalizar</button>
      </form>
    </main>
  </body>
