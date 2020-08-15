<?php 
//operadores lógicos
//e (&& - and) - é um operador que nos retorna um valor verdadeiro quando as duas expressões são verdadeiras
// ou (|| - or) - quando uma expressão é verdadeira ou quando pelo menos as duas expressões são verdadeiras

// ou exclusivo (xor) - só retorna verdadeiro quando (pelo menos uma) expressão é verdadeira

// negação (!) - negar a expressão

$altura = 1.60;
$nome = "babi";;

if(($altura == 1.60) and ($nome == "babi")):
	echo "é verdadeiro";
else:
	echo "é falso";
endif;

echo "<hr>";

$fruta = "uva";
$casa = "rosa";

if(($fruta == "uva") xor ($casa == "azul")):
	echo "é verdadeiro";
else:
	echo "é falso";
endif;
echo "<hr>";

$cidade = "rj";
$fruta = "maca";

if(($cidade == "sp") or ($fruta == "mamão")):
echo "é verdadeiro";
else:
	echo "é falso";
endif;
echo "<hr>";

$mercado = "guanabara";
$numero = 10;;

if(($mercado == "guanabara") && ($numero == 10)):
	echo "é verdadeiro";
    else:
    	echo "é falso";
    endif;
echo "<hr>";
$nome = "douglas";
$altura = 1.70;
if(($nome == "bebis" )or ($altura == 1.50)):
	echo "é verdadeiro";
else:
	echo "é falso";
endif;