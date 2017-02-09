<?php

/*
 sort($argv) ordena os valores do Array
*/


rsort($argv);

for ($i=1; $i < count($argv); $i++) {
  echo "Parametro ordenado descendente: $argv[$i]" . PHP_EOL;
}
