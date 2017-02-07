<?php

//Faça um programa que percorra todos os números de 1 até 100. Para os números ímpares, deve ser exibido um * e para os números pares **

for($contador = 1; $contador < 101; $contador++) {
  if (($contador % 2) == 0){
    echo  $contador . ' **' .  PHP_EOL;
  } else {
    echo  $contador . ' *' .  PHP_EOL;
  }
}
