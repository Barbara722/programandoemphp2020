<?php
//Superglobais
/* GLOBALS
$_SERVER = informações sobre cabeçalhos, caminhos e locais de scripts.
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIES
$_SESSION
*/
$x = 15;
$y = 20;

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";

echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];

