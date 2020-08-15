<?php
//criando funções

function exibirNome($nome){
	echo "meu nome é $nome";
} 
exibirNome("babi");
echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
	$media = ($n1 + $n2 + $n3) / 4;
	if($media >= 7):
		echo "$nome foi aprovado com a média $media.";
	else:
		echo "$nome foi reprovado";
	endif;
}

calcularMedia("babi", 10, 10, 10, 10);