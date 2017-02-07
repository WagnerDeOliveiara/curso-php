<?php

//Faça um programa que percorra todos os números de 1 até 100. Para os números múltiplos de 4, exiba a palavra PIN, e para os outros, exiba o próprio número.

for($contador = 1; $contador < 101; $contador++) {
  if (($contador % 4) == 0){
    echo 'PIN' .  PHP_EOL;
  } else {
    echo  $contador . ' *' .  PHP_EOL;
  }
}
