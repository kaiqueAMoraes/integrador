<?php
header('Content-type: text/html; charset=iso-8859-1');
  require_once("../objetos/obj_conexao_bd.php");

  $conexao = AbreConexaoBd();

 $sql = "select * from tb_sobre";

 $res = mysqli_query($conexao, $sql);

 echo mysqli_num_rows($res);

?>



<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="iso-8859-1">
    <title>Sobre mim</title>
    <link type="text/css" rel="stylesheet" href="../sass/css/sobreMim.css">
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
    <style media="screen">
      body{
        display: flex;
        flex-direction: row;
       align-items: center;
      }
    </style>
  </head>
  <body>
    <canvas id="noise" class="noise"></canvas>
    <header>
      <div id="voltar" title="Voltar á pagina anterior">
        <a href="../index.php"><span>&#60;</span></a>
      </div>
    </header>
<main>
  <div class="containerInfoAlbum">
    <div style="margin: 150px 160px 0 160px;">
        <div style=" margin-bottom: 10rem;">
            <?php
                $buscaFoto = "SELECT id_sobre,foto,texto FROM tb_sobre WHERE id_sobre = 1 ";
                $queryFoto= mysqli_query(AbreConexaoBd(),$buscaFoto);

                if($foto = mysqli_fetch_assoc($queryFoto)){
                echo "<img style='max-width: 60%;' src='../fotografo/".$foto['foto']."'>";

                }

            ?>
        </div>
        <div style=" margin-bottom: 10rem;  text-align: center;">
          <h1><?php
          $buscaSobre = "SELECT id_sobre,foto,texto FROM tb_sobre WHERE id_sobre = 1 ";
          $querySobre= mysqli_query(AbreConexaoBd(),$buscaSobre);

          if($sobre = mysqli_fetch_assoc($querySobre)){
            echo $sobre['texto'];
          }

          ?></h1>
        </div>
    </div>

  </div>
</main>
  </body>
</html>
