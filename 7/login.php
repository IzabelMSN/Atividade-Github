<?php

echo "Insira suas infomações para login"."\n";

$user = readline("Insira o nome do seu usuário: "."\n");

$email = readline("Insira seu e-mail:"."\n");

$senha = readline("Insira sua senha: "."\n");

$confisenha = readline("Confirme sua senha: "."\n");

while ($senha != $confisenha) {
    echo "Senhas diferentes. "."\n";
    $senha = readline(" Digite a mesma senha: "."\n");
    break;
}