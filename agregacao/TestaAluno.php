<?php

require_once("Turma.php");
require_once("Aluno.php");

$turma = new Turma;
$turma->periodo = "Manha";
$turma->serie = 5;
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";

$aluno = new Aluno;
$aluno->nome = "Rafael Cosentino";
$aluno->dataNascimento = "30/10/1984";
$aluno->rg = 11111111;

$aluno->turma = $turma;

echo "Nome do Aluno: $aluno->nome" . PHP_EOL;
echo "Data de nascimento do Aluno: $aluno->dataNascimento" . PHP_EOL;
echo "RG do Aluno: $aluno->rg" . PHP_EOL;

echo "Periodo da turma: {$aluno->turma->periodo}" . PHP_EOL;
echo "Serie da da turma: {$aluno->turma->serie}" . PHP_EOL;
echo "Sigla  da da turma: {$aluno->turma->sigla}" . PHP_EOL;
echo "Tipo de ensino da da turma: {$aluno->turma->tipoDeEnsino}" . PHP_EOL;
