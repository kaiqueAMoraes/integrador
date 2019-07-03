<?php
  include("../objetos/obj_conexao_bd.php");
  $conexao = AbreConexaoBd();

  $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq, tb_album.id_album
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";
  $result= mysqli_query($conexao, $sql);

  include("../objetos/obj_selecionado.php");

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Selecionados</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/editarSelecionados.css">
<script src="../js/backgroundChiado.js" charset="utf-8"></script>
  </head>
<body>
  <header>
    <div id="voltar" title="Voltar á pagina anterior">
      <a href="../index.html"><span>&#60;</span></a>
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
  <canvas id="noise" class="noise"></canvas>
    <main>
      <!-- <div class="button" id="button" title="Criar um novo album"><span>&#x2b;</span></div> -->
      <section>

        <form method='post'>
            <section>
            <?php

            while($album = mysqli_fetch_assoc($result)){
            echo "<a href= 'album.php?id_album=".$album['id_album']."'>
            <div class='albumSelecionado'
                  style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."');
                  background-repeat: no-repeat;
                  background-size: cover;
                  background-position: center;
                  filter: grayscale(100%);
                  \">

                  <label class='button'><input class='sumirInput' type='checkbox' name='selecionado[]' id='".$album['id_album']."' value='".$album['id_album']."'>OK</label>


            </div></a>";
            }
            ?>

            </section>
            <section>
              <input class='sumirInput' type='submit' id='finalizarMudancas' value='Finalizar Mudanças'>
              <label title='Finalizar as mudanças feitas.' for='finalizarMudancas' class='sendSelecionados' >Finalizar mudanças</label>
            </section>
        </form>

      </section>
    </main>

<footer></footer>
<!-- <script type="text/javascript" src="../js/criarDiv.js"></script> -->
</body>

</html>
