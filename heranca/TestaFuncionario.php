<?php

require_once "Gerente.php";
require_once "Secretario.php";

$gerente = new Gerente;
$gerente->nome = "Maria";
$gerente->salario = 12000;
$gerente->senha= 1234;

$secretario = new Secretario;
$secretario->nome = "João";
$secretario->salario = 2000;
$secretario->ramal = 456789;

echo "Nome do gerente: $gerente->nome" . PHP_EOL;
echo "Salario do gerente: $gerente->salario" . PHP_EOL;
echo "Senha do gerente: $gerente->senha" . PHP_EOL;

echo "Nome do secretario: $secretario->nome" . PHP_EOL;
echo "Salario do secretario: $secretario->salario" . PHP_EOL;
echo "Ramal do secretario: $secretario->ramal" . PHP_EOL;
