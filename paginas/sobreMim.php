<?php
  require_once("../objetos/obj_conexao_bd.php");

  $conexao = AbreConexaoBd();

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sobre mim</title>
    <link type="text/css" rel="stylesheet" href="../sass/css/sobreMim.css">
    <script src="../js/backgroundChiado.js" charset="utf-8"></script>
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
    <div style="margin-top: 100px;">
        <div >
            <?php
                $buscaFoto = "SELECT id_sobre,foto,texto FROM tb_sobre WHERE id_sobre = 1 ";
                $queryFoto= mysqli_query(AbreConexaoBd(),$buscaFoto);

                if($foto = mysqli_fetch_assoc($queryFoto)){
                echo "<img style='max-width: 60%;' src='../fotografo/".$foto['foto']."'>";

                }

            ?>
        </div>
        <h1><?php
            $buscaSobre = "SELECT id_sobre,foto,texto FROM tb_sobre WHERE id_sobre = 1 ";
            $querySobre= mysqli_query(AbreConexaoBd(),$buscaSobre);

            if($sobre = mysqli_fetch_assoc($querySobre)){
              echo $sobre['texto'];
            }

        ?></h1>
    </div>

  </div>
</main>
  </body>
</html>
