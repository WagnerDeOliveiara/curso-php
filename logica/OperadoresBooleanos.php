<?php

$a = 10;
$b = "10";

//compara as variaveis independende de tipo e se tem algo a direita no texto
$resultado = $a == $b;
var_dump($resultado);

//compara as variaveis, tipo e conteudo
$resultado = $a === $b;
var_dump($resultado);
