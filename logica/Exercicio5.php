<?php

//Crie um programa que exiba no Console um triângulo de *


$imprime = '';

for($contador = 1; $contador < 6; $contador++) {
  for($contador2 = 0; $contador2 < $contador; $contador2++) {
    $imprime =  $imprime . '*';
  }
  echo  $imprime . PHP_EOL;
  $imprime = '';
}
