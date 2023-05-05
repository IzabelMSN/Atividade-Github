<?php
echo "Escreva uma palavra e descubra a ocorrência de cada caractere ->"."\n";

$string = readline("Digite a palavra escolhida: ");

$palavra = strlen($string);

function resultado($string){
    $string = str_replace(' ', ' ', $string);

    $caractere = str_split($string);

    $resultado = [];

    foreach ($caractere as $caractere_k) {
        if (!isset($resultado[$caractere_k])){
            $resultado[$caractere_k] = 1;
        }else {
            $resultado[$caractere_k] += 1;
        }
    }

    foreach($resultado as $caractere_k => $caractere_v){
        echo "Número de ocorrência do caractere: ".$caractere_k."Foi: ".$caractere_v."\n";
    }
}

resultado($string);
