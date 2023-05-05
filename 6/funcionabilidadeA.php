<?php

echo "Funcionalidade 2";

echo "Fazendo funcionalidade 2 -> Senha";

$senha = readline("Digite sua senha: ");

while ($senha != "1234") {
    echo "Senha incorreta. ";
    $senha = readline(" Digite a senha correta: ");
}