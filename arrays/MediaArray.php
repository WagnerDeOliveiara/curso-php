<?php

/*
 Faça um programa que calcule a média dos parâmetros passados como parâmetros.
*/

$valorTotal = 0;
$erro = '';

for ($i=1; $i < count($argv); $i++) {
  if($argv[$i] != is_numeric($argv[$i])){
     echo "Existe um valor não numerico" . PHP_EOL;
     $i = (count($argv) + 1);
     $erro = "Erro";
  } else {
     $valorTotal += $argv[$i];
  }
}

if($erro != "Erro"){
  $valorMedia = $valorTotal / (count($argv) - 1);
  echo "Valor total é: $valorMedia" . PHP_EOL;
}
