<?php
/**
 * Crie uma classe chamada Aluno para definir os objetos que representarão os alunos de uma escola.
 * Nessa classe, declare três atributos: o primeiro para o nome, o segundo para o RG e o terceiro para a data de nascimento dos alunos.
 */
class Aluno
{

  public $nome;
  public $rg;
  public $dataNascimento;

}

/**
 * Crie dois objetos da classe Aluno. Altere os valores dos atributos desses objetos e exiba no Console os valores armazenados nesses atributos.
 */

$aluno = new Aluno;
$aluno->nome = "Marcelo Martins";
$aluno->rg = "33333333-3";
$aluno->dataNascimento = "02/04/1985";

$aluno1 = new Aluno;
$aluno1->nome = "Rafael Cosentino";
$aluno1->rg = "222222222-2";
$aluno1->dataNascimento = "30/10/1984";


echo "Nome do aluno: $aluno->nome" . PHP_EOL;
echo "RG do aluno: $aluno->rg" . PHP_EOL;
echo "Data nascimento do aluno: $aluno->dataNascimento" . PHP_EOL;

echo "Nome do aluno: $aluno1->nome" . PHP_EOL;
echo "RG do aluno: $aluno1->rg" . PHP_EOL;
echo "Data nascimento do aluno: $aluno1->dataNascimento" . PHP_EOL;
