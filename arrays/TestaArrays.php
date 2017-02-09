<?php

//Array ppode ser inicializado vazio ou com valores
$cursos = array("CUR003" => "Pyton", "Ruby", "Matemática");

$cursos[] = "logica";   //adiciona valor ao Array

$cursos["CUR012"] = "HTML"; //adiciona valor sendo que a posição do incive nesse caso sera CUR012

var_dump($cursos);

// count($cursos) e sizeof($cursos) metodos para obter quantidade de elementos do array
var_dump(count($cursos));
var_dump(sizeof($cursos));

echo PHP_EOL . "Curso posição 0: $cursos[0]" . PHP_EOL;

for ($i=0; $i < count($cursos); $i++) {
  echo "Curso: $cursos[$i]";
}

echo PHP_EOL . "---------------foreach-------------" . PHP_EOL;
foreach ($cursos as $x => $valor) {
  echo PHP_EOL . "Chave: $x" . PHP_EOL . "Valor: $valor" . PHP_EOL;
}
