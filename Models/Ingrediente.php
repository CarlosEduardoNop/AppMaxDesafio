<?php

namespace Models;

class Ingrediente 
{
  public string $nome;
  public string $validade;

  public function __construct ($nome) 
  {
    $this->nome = $nome;
    $this->validade = $this->randomDate();
  }

  public function randomDate()
  {
    $min = strtotime("01/02/2022");
    $max = strtotime("01/01/2026");
    $val = rand($min, $max);
    return date("Y-m-d H:i:s", $val);
  }
}