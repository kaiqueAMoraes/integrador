<?php
$baseDir = '../albuns/';
$abreDir = (array_key_exists('dir', $_GET) ? $_GET['dir'] : $baseDir);

$openDir = dir($abreDir);

    while( $arq = $openDir -> read()):
        if($arq != "." && $arq != ".."){
            if(is_dir($abreDir.$arq)){

            echo "$arq ";
            echo '<div class="album" style=" width: 200px; height: auto;"><a href="portifolio.php?dir='.$abreDir.$arq.'/">abrir</a> <br></div>';

            }
            else{

            echo "$arq ";
            echo '<a href="'.$abreDir.$arq.'"> ver </a> <br>';

            }
        }

    endwhile;


 $openDir->close();


?>
