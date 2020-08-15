<?php
// While & Do While = Estruturas de repetição
 //while - enquanto. Enquanto uma condição for verdadeira ele vai executar um trecho de código
// DO = Faça

$contador = 1;
while ($contador <= 10):
  echo "contador é $contador <br>";
   $contador++;
endwhile;

echo "<hr>";
$contador = 1;
do {
	echo "contador é $contador<br>";
	$contador++;
	
} while ($contador <= 10);