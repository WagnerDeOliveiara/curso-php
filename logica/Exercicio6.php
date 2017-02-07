<?php

//Crie um programa que exiba no Console vários triângulos de *


$imprime = '';

for($contador3 = 5; $contador3 > 0; $contador3--) {
  for($contador = 1; $contador < 6; $contador++) {
    for($contador2 = 0; $contador2 < $contador; $contador2++) {
      $imprime =  $imprime . '*';
    }
    echo  $imprime . PHP_EOL;
    $imprime = '';
  }
  echo PHP_EOL;
}
