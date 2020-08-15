<?php
//for = quer dizer "para"
for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = ".($contador*8 )."<br>";
endfor;

echo "<hr>";

$cores = array("verde", "amarelo", "preto");
 foreach($cores as $indice => $valor):
 	echo $indice."-". $valor."<br>";
 endforeach;