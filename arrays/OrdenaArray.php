<?php

/*
 sort($argv) ordena os valores do Array
*/


sort($argv);

for ($i=0; $i < (count($argv) - 1); $i++) {
  echo "Parametro ordenado: $argv[$i]" . PHP_EOL;
}
