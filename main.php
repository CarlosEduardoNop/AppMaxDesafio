<?php

include 'Models/Ingrediente.php';
include 'Models/Cozinha.php';

function generateIngrediante($names) 
{
  $ingredientes = [];

  foreach($names as $name) {
    $ingredientes[] = new Ingrediente($name);
  }

  return $ingredientes;
}

$ingredientesMineiroNames = [
  "Feijão",
  "Farinha",
  "Arroz",
  "Carne de Porco",
  "Linguiça"
];

$cozinhaMineira = new Cozinha(
  "Cozinha mineira", 
  14, 
  20, 
  "Feijoada",
  generateIngrediante($ingredientesMineiroNames)
);

$ingredientesChinesaNames = [
  "Champignon",
  "Brócolis",
  "Macarrão",
  "Carne"
];

$cozinhaChinesa = new Cozinha(
  "Cozinha chinesa", 
  10, 
  23, 
  "Yakissoba",
  generateIngrediante($ingredientesChinesaNames)
);

echo("Cozinha mineira\n");
var_dump($cozinhaMineira);
echo("Número de ingredientes ".$cozinhaMineira->countIngredientes()."\n");

echo("Cozinha chinesa\n");
var_dump($cozinhaChinesa);
echo("Número de ingredientes ".$cozinhaChinesa->countIngredientes()."\n");