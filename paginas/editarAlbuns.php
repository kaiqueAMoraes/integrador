<?php
  include("../objetos/obj_conexao_bd.php");
  include("../objetos/obj_processaLogin.php");

  $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";

$result= mysqli_query(AbreConexaoBd(), $sql);

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Albuns</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/editarAlbuns.css">
    <script type="text/javascript" src="../js/criarDiv.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
<body>
  <header>

    <div id="voltar" title="Voltar á pagina anterior">
      <a href="paginaAdministrador.html"><span>&#60;</span></a>
    </div>

    <h1>Editar Albuns.</h1>

  </header>
  <?php
  echo "<div class='alert alert-danger' role='alert'>
       $mensagem
      </div>";
   ?>
    <main>
      <div class="button" id="button" title="Criar um novo album"><span>&#x2b;</span></div>
      <section class="container">
        <?php
          while($album = mysqli_fetch_assoc($result)){

         echo  "<div class='album'>
               <img src='../albuns/".$album['dir']."/".$album['arq']."' width='200' height='200'/>

                </div>";


          }

        ?>

        <div class="album"></div>
        <div class="album"></div>
        <div class="album"></div>
        <div class="album"></div>
        <div class="album"></div>
      </section>
    </main>
<footer></footer>
</body>
