<?php

class Funcionario
{

  public $nome;
  public $salario;
  const PORCENTAGEM_DO_BONUS = 0.05;  //declaração de constante

  public function calculaBonus(){
    return $this->salario * self::PORCENTAGEM_DO_BONUS + 1000;
  }

}
