<?php

$contador = 0; //declaração

while($contador < 100) {  //Condição de parada
  echo "Mensagem" . $contador . PHP_EOL;
  $contador++;  //incremento
}

for($contador = 0; $contador < 100; $contador++) {
  echo "Mensagem" . $contador . PHP_EOL;
}
