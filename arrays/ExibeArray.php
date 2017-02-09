<?php

/*
 $argv é uma variavel global, nela o php recebe os valores passados como parametro
 na posição 0 sempre virá o nome do programa
*/

for ($i=1; $i < count($argv); $i++) {
  echo "Parametro recebido: $argv[$i]" . PHP_EOL;
}
