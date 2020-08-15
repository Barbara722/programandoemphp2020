<?php

$keys = array("campeão", "vice", "terceiro");
$values = array("flamengo", "vasco", "terceiro");

$times = array_combine($keys, $values);
print_r($times);

//criei o índice e os valores, e com a função array combine pude mesclar os dois arrays(keys e values) e gerei o array time.