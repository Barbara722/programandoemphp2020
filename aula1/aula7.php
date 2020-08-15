<?php
// CONSTANTES
define("nome", "babi");
define("idade", 20);
define("altura", 1.60);
define("solteira", false);

var_dump(altura);
define("times", ['vasco', 'flamengo', 'santos']);

echo 'meu nome é '.nome.',minha idade é '.idade.' e minha altura é '.altura. '.';
echo "<hr>";
var_dump(times);

function exibeNome() {
	echo nome;
}
exibeNome();
echo "<hr>";
define("carros", ['chevrolet', 'gol']);
var_dump(carros);
echo "<hr>";

define("sorvetes", ['coco', 'chocolate', 'flocos']);
var_dump(sorvetes);

echo "<hr>";
define("biscoitos", ['uva', 'limão']);
var_dump(biscoitos);
