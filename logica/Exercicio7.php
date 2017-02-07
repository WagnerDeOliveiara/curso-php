<?php

//Os números de Fibonacci são uma sequência de números definida recursivamente. O primeiro elemento da sequência é 0 e o segundo é 1. Os outros elementos são calculados somando os dois antecessores.
//0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233

$primeiro = 0;
$segundo = 1;
$resultado = 0;

echo $primeiro . PHP_EOL;
echo $segundo . PHP_EOL;

for($contador = 1; $contador < 10; $contador++) {
  $resultado = $primeiro + $segundo;
  echo $resultado . PHP_EOL;
  $primeiro = $segundo;
  $segundo = $resultado;

}
