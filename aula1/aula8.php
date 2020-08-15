
<?php
///arrays numéricos
$carros = array(1=>"chevrolet", 2=>"gol");
$carros[] = "amarok";
$carros[] = "camaro";
$carros[] = "palio";
$carros[10] = "fusca";

print_r($carros);
////////////
echo "<hr>";
$motos = array();
$motos[] = "yamarra";
print_r($motos);
echo "<hr>";
/////////////
$cidades = array();
$cidades[] = "rj";
$cidades[] = "sp";
$cidades[] = "sc";
echo "<hr>";
$cidades[10] = "bh";


echo $cidades[10];
print_r($cidades);
echo "<hr>";

$clientes = ["babi", "bia"];
print_r($clientes);
echo "<hr>";


//função count
$totalcarros =  count($carros);
echo $totalcarros;
echo "<hr>";
echo count($motos);
//Foreach = comando para exibir valor
echo "<p>Carros<p>";
foreach($carros as $valor) {
	echo $valor."<br>";
}
echo "<hr>";

echo "<p>Clientes<p>";
foreach($clientes as $valor){
	echo $valor."<br>";
}
echo "<hr>";

echo "<p>Cidades<p>";
foreach($cidades as $valor){
	echo $valor."<br>";
}
echo "<hr>";

foreach($motos as $avalor){
	echo $valor."<br>";
}
echo "<hr>";

//arrays associativos
$pessoa = array("nome"=> "marta", "idade"=> 20, "altura"=> 1.60);
$pessoa["cidade"] = "rj";
print_r($pessoa);
foreach($pessoa as $indice => $valor){
echo $indice.":".$valor."<br>";
}

//arrays multidimencionais
$times = array(
"cariocas"=> array("campeao"=>"flamengo", "vice"=> "vasco", "terceiro"=> "botafogo"),
"paulistas"=> array("santos", "são paulo", "palmeiras"),
"baianos"=> array("bahia", "vitória", "itabuna"));
echo $times["cariocas"][1];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor){
	echo $indice.":".$valor."<br>";
}