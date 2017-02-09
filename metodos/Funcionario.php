<?php

//Adicione na classe Funcionario dois métodos: um para aumentar o salário e outro para consultar os dados dos funcionários.

class Funcionario
{

  public $nome;
  public $salario;

  public function aumentaSalario($valor)
  {
    $this->salario = $valor;
  }

  public function consultaDados()
  {
    return $this->salario;
  }


}


/*

Lambda
var b = function(){
  alert("a");
}

$("p").onclick(b);

var funcao = () -> { alert("ola"); }
*/
