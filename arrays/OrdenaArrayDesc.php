<?php

/*
 rsort($argv) ordena os valores do Array de forma descendente
*/


rsort($argv);

for ($i=1; $i < count($argv); $i++) {
  echo "Parametro ordenado: $argv[$i]" . PHP_EOL;
}
