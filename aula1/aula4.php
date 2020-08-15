      <?php

$nome = "méxico";
var_dump($nome); 
if(is_string($nome)):
  echo "é uma string";
  else:
  	echo "não é uma string";
  endif;
   echo "<br>";
   
 $nome = "123";
 var_dump($nome);
 if(is_string($nome)):
 	echo "é uma string";
 else:
 	echo "não é uma string";
 endif;
echo "<hr>";

$idade = 20;
var_dump($idade);
if(is_int($idade)):
	echo "é um inteiro";
else:
	echo "não é um inteiro";
endif;
echo "<hr>";

$altura = 1.60;
var_dump($altura);
if(is_int($altura)):
	echo "é um inteiro";
else:
	echo "não é um inteiro";
endif;
echo "<hr>";

$altura = 1.50;
var_dump($altura);
if(is_float($altura)):
	echo "é um float";
else:
	echo "não é um float";
endif; 

echo "<hr>";
$altura = 65;
var_dump($altura);
if(is_float($altura)):
	echo "é um float";
else:
	echo "não é um float";
endif;
echo "<hr>";

$nome = "babi";
var_dump($nome);
if(is_string($nome)):
	echo "é uma string";
else:
	echo "é uma string";
endif;
echo "<hr>";

$idade = 30;
var_dump($idade);
if(is_int($idade)):
	echo "é um inteiro";
else:
	echo "não é um inteiro"; 
endif;
echo "<hr>";

$altura = 70;
var_dump($altura);
if(is_float($altura)):
	echo "é um float";
else:
	echo "é um float";
endif;

$admin = true;
var_dump($admin);
//******compostos/////////////

$carros = array("uno","gol","chevrolet", 10,1.60,true);
var_dump($carros);
if(is_array($carros)):
	echo "é um array";
else:
	echo "não é um array";
endif;
echo "<hr>";
//////object//////

$altura = 10;
var_dump($altura);
if(is_int($altura)):
	echo "é um inteiro";
else:
	echo "não é um inteiro";
endif;

echo "<hr>";
$idade = 20;
var_dump($idade);
if(is_int($idade)):
	echo "é um inteiro";
else:
	echo "não é um inteiro";
endif;