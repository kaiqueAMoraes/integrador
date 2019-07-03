<?php
session_start();

  include("../objetos/obj_conexao_bd.php");
  $conexao = AbreConexaoBd();

  $sql= "Select tb_album.nome as dir,
         tb_foto.nome as arq, tb_album.id_album
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1";
  $result= mysqli_query($conexao, $sql);

  require_once("../objetos/obj_selecionado.php");

  if (isset($_SESSION["select"])){
    echo '<div>
    <p style="color: #000;">ADICIONADO AOS SELECIONADOS COM SUCESSO !!</p>
    </div>';
    unset($_SESSION["select"]);
    $page = $_SERVER['PHP_SELF'];
    $sec = "10";
    header("Refresh: $sec; url=$page");
  }

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



        <form method='post'>
            <section>

            <?php

            while($album = mysqli_fetch_assoc($result)){
              echo "<div class='albumContainer'>";
              echo "<label title='Selecionar Album' class='albunsSelecionadoButton'><input class='sumirInput' type='checkbox' name='selecionado[]' id='".$album['id_album']."' value='".$album['id_album']."'><span>OK</span></label>";

            echo "<a class='albumSelecionado' href= 'album.php?id_album=".$album['id_album']."'>
            <div class='albumSelecionado'
                  style=\"background-image: url('../albuns/".$album['dir']."/".$album['arq']."');
                  background-repeat: no-repeat;
                  background-size: cover;
                  background-position: center;

                  \">



            </div></a>";
            echo "</div>";
            }
            ?>

            <input class='sumirInput' type='submit' id='finalizarMudancas' value='Finalizar Mudanças'>
            <label class='sendSelecionados' title='Finalizar as mudanças feitas.' for='finalizarMudancas' >Aplicar mudanças</label>
            </section>
        </form>

      </section>
    </main>

<footer></footer>
<script type="text/javascript">
function fundolabel(x){

var Label = document.getElementsByTagName('label');

if(Label[x].style.backgroundColor === "rgb(46, 204, 113)"){
    Label[x].style.backgroundColor = "rgb(85, 83, 86)";
}else{
  Label[x].style.backgroundColor = "rgb(46, 204, 113)";
}


}
var CheckedBox = document.getElementsByTagName('input');

for (var k = 0; k < CheckedBox.length; k++){
if(CheckedBox[k].type == "checkbox"){
  v = k ;
  CheckedBox[k].setAttribute("onclick",'fundolabel('+ v + ')');
  }
}
</script>
</body>

</html>
