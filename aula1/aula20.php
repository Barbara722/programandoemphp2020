<?php//funções para números
/* number_format
round
ceil
florr
rand
*/

$db = 1234.56;
$preco = number_format($db, 2, ",","." );
echo "o valor do produto é R$ $preco";

echo "<hr>";

echo rand(2,20);
