<?php

//Teste os métodos da classe Funcionario.

require_once("Funcionario.php");

$funcionario = new Funcionario;


$funcionario->aumentaSalario(1000);
echo "salario aumentado: $funcionario->salario" . PHP_EOL;

$valorConsulta = $funcionario->consultaDados();
  echo "Salario do Funcionario: $valorConsulta" . PHP_EOL;
