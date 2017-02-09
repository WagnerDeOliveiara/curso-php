<?php
/**
 * Acrescente um construtor na classe CartaoDeCredito para receber um número como parâmetro.
 */
class CartaoDeCredito
{

  public $numero;
  public $dataDeValidade;
  public $cliente;

//metodo construtor
//com isso fica obrigado que seja passado esse argumento na criação do objeto(no new)
public function __construct($numero)
{
  $this->numero = $numero;
}

}
