<?php

require_once "Funcionario.php";

// com a clausula extends, a classe herda os atributos da classe extendida.
class Gerente extends Funcionario
{

  public $senha;

}
