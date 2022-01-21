<?php
namespace Models;

use DataTime;

class Ingrediente {

  public function __construct ($teste) {
    $this->nome = $teste;
    $min = strtotime("01/02/2022");
    $max = strtotime("01/01/2026");
    $val = rand($min, $max);
    $date = date("Y-m-d H:i:s", $val);
    $this->validade = $date;
  }

  public string $nome;
  public string $validade;
}