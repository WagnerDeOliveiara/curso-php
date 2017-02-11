<?php

require_once "Funcionario.php";

// com a clausula extends, a classe herda os atributos da classe extendida.
class Gerente extends Funcionario
{

  public $senha;

//override, sobrescrita ou reescrita de metodo(criar função na filha com o mesmo nome da do pai(mãe). quem usar essa classe, chamará essa.)
public function calculaBonus(){

  //"parent::nomeClasse" serve para chamar o metodo da classe pai(mãe) a partir da filha
  return parent::calculaBonus() + 2 * $this->salario;
}

}
