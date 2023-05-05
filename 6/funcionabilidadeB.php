<?php

echo "Funcionalidade B"."\n";

echo "Fazendo funcionalidade B -> E-mail"."\n";

$email = readline("Digite sua e-mail: "."\n");

while ($email != "lolo@gmail.com") {
    echo "E-mail incorreto. ";
    $email = readline(" Digite o e-mail correto: ");
}