<?php
//funções para string
/* strtoupper
strtolower
substr
str_pad
str_pad
str_repeat
strlen
str_replace
strpos
*/
//$nome = "babi";
$novonome = strtolower($nome);
echo $novonome;
echo "<hr>";

$mensagem = "olá mundo";
 echo substr($mensagem, 4, 4);

 echo "<hr>";

 $objeto = "mesa";
 $novoobjeto = str_pad($objeto, 3);
 echo $novoobjeto;

  echo "<hr>";

$string = str_repeat("sucesso<br>", 10);
echo $string;
  echo "<hr>";

$mensagem = "sucesso";
echo strlen($mensagem);
echo "<hr>";

$texto = "eu sei que aconteceu";
$novotexto = str_replace("sei", "não", $texto);
echo $novotexto;
echo "<hr>";

echo strpos($texto, "aconteceu");

