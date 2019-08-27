<?php
  include("../objetos/obj_conexao_bd.php");

  $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq, tb_album.id_album
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";
  $result= mysqli_query(AbreConexaoBd(), $sql);

  // TODO:
    //FIXME:
    // REVIEW:
    // IDEA:

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Albuns</title>
    <link rel="stylesheet" type="text/css" href="../sass/css/portifolioCompleto.css">
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>





  </head>
<body>
  <canvas id="noise" class="noise"></canvas>

  <header>
    <div id="voltar" title="Voltar á pagina anterior">
      <a href="../index.php"><span>&#60;</span></a>
    </div>
    <h1>Portifolio completo</h1>
  </header>

  <section class="sectionProcura">
  <input type="search" name="" value="" id="procurar" title="Pressione enter para realizar a pesquisa" placeholder="pesquisar">



    <div class="tagArea">
    <label><input class="teste" type="checkbox" name="checkbox"  value="value">casamento</label>
    <label><input type="checkbox" name="checkbox" value="value">infantil</label>
    <label><input type="checkbox" name="checkbox" value="value">eventos</label>
    <label><input type="checkbox" name="checkbox" value="value">mulher</label>
    <label><input type="checkbox" name="checkbox" value="value">homem</label>
    <label><input type="checkbox" name="checkbox" value="value">ensaio</label>
    <label><input type="checkbox" name="checkbox" value="value">pets</input></label>

    </div>
  </section>
    <main>
      <section class="container">

        <?php

          while($album = mysqli_fetch_assoc($result)){

          echo "<a href= 'album.php?id_album=".$album['id_album']."'><div
                  style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."'); background-repeat: no-repeat; background-size: cover; background-position: center; filter: grayscale(100%); \" class='album'>
                </div></a>";
          }
        ?>

      </section>
    </main>
<footer>

</footer>
</body>
<script src="../js/portifolio.js" charset="utf-8"></script>
<script>
  var pesquisa = document.getElementById('procurar');

  pesquisa.onkeypress = function(event){

    if(event.keyCode == 13){

       var ajax = new XMLHttpRequest();
       var pagina = "../objetos/pesquisa.php?dado=";
       var method  = "get";
       var dados = null;

       dado = pesquisa.value;
      ajax.open(method, pagina + dado, true);
var xml = null;
      ajax.onreadystatechange = function(){

           // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
           if (ajax.readyState == 4 && ajax.status == 200) {

                   xml = ajax.responseText;
                   alert(xml)
               }else{
                   alert("Erro");
               }
           }

ajax.send(null);

    }
  }



</script>

<script src="../js/adicionaCorImagem.js"></script>
