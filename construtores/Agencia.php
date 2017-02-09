<?php
/**
 * Acrescente um construtor na classe Agencia para receber um número como parâmetro.
 */
class Agencia
{

  public $numero;

//metodo construtor
//com isso fica obrigado que seja passado esse argumento na criação do objeto(no new)
public function __construct($numero)
{
  $this->numero = $numero;
}

}
