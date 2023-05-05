<?php

echo "Funcionalidade A";

echo "Fazendo funcionalidade A -> Senha";

$senha = readline("Digite sua senha: ");

while ($senha != "weru781@") {
    echo "Senha incorreta. ";
    $senha = readline(" Digite a senha correta: ");
}