<?php

require_once("objetos/obj_conexao_bd.php");
$conexao = AbreConexaoBd();

$sql= "SELECT email, instagram, facebook FROM tb_contato";

$result= mysqli_query($conexao, $sql);
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Anderson Rodrigues</title>
     <link rel="stylesheet" type="text/css" href="sass/css/index.css">

     <script src="js/backgroundChiado.js" charset="utf-8"></script>
   </head>
   <body>
     <canvas id="noise" class="noise"></canvas>
      <main>
          <section class="container">
              <div class="logo"><img src="LOGO.png" height="95px"></div>
              <section class="conteudo">
                <div id="box1">
                  <a  href="paginas/trabalhosSelecionados.php">Trabalhos selecionados</a>
                </div>
                <div id="box2">
                  <a href="paginas/portifolioCompleto.php">Portifolio completo</a>
                </div>
              </section>
          </section>
          <?php

            while($contato = mysqli_fetch_assoc($result)){
            echo "<a href=".$contato['email']." class='contato'><img class='iconIndex' src='sass/img/email.svg' alt=''></a>";
            echo "<a href=".$contato['instagram']." class='contato'><img class='iconIndex' src='sass/img/instagram-logo.svg' alt=''></a>";
            echo "<a href=".$contato['facebook']." class='contato'><img class='iconIndex' src='sass/img/facebook-logo-button.svg' alt=''></a>";
            }

          ?>
          <a href="./paginas/sobreMim.php" id='sobre' class="sobre" alt="">Sobre Mim</a>
      </main>


   </body>
 </html>
 <script src="js/index.js" charset="utf-8"></script>

 <!-- um comentario -->
