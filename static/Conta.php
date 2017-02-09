<?php

class Conta
{

  public $numero; //Atributo do objeto
  public $saldo;  //Atributo do objeto
  public static $contador = 0; //Atributo da classe
  //atributos static são atributos "da classe", quanndo é do objeto não precisa do "$this->" para ser acessado na classe

  public function __construct()
  {
    //esse contador tera a quatidade de vezes que que a classe for instanciado
    //por se tratar de atributo da classe, utiliza "self::"
    self::$contador++;
  }

//quando um metodo é static, ele é da classe não do objeto.
//com isso ele pode ser chamado sem que o objeto seja instanciado, pode ser inclusive chamado na propria classe
//dentro de metodos da classe, NÃO funciona "$this->" pois o "$this->" aponta para atributos do objeto, e o objeto pode nem estar criado.
    public function zeraContador()
    {
      //por se tratar de atributo da classe, utiliza "self::"
      self::$contador = 0;
    }

}
