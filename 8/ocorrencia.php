<?php
$string = "Palavra";

$palavra = strlen($string);

for($i = 0; $i < $palavra; $i++){
    $caractere = $string[$i];

    echo "Número de ocorrência do caractere: $i"."Foi: $caractere\n";
}