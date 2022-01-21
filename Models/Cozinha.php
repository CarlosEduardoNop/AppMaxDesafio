<?php

namespace Models;

class Cozinha{

  public function __construct (
    $nome,
  $hora_de_abertura, $hora_de_fechamento,$prato_principal,$ingrediente) {
    $this->$nome = $nome;
    $this->$hora_de_abertura = $hora_de_abertura;
    $this->$hora_de_fechamento = $hora_de_fechamento;
    $this->$prato_principal = $prato_principal;
    $this->Ingrediente = $ingrediente;
  }

  public function getIngredientes(){
    return $this->Ingrediente;
  }

  public string $nome;
  public int $hora_de_abertura;
  public int $hora_de_fechamento;
  public string $nome_da_cozinha;
  public string $prato_principal;
  public $ingrediente = [];
}
