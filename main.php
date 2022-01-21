<?php
require 'Models/Ingrediente.php';
require 'Models/Cozinha.php';

use Models\Ingrediente;
use Models\Cozinha;

//Cozinha Mineira

$arr_ingredientesM = array(
  "Feijão",
  "Farinha",
  "Arroz",
  "Carne de Porco",
  "Linguiça"
);

$arrM = array();

foreach($arr_ingredientesM as $value)
{
  $arrM[] = new Ingrediente($value);
}

$cozinha_mineira = new Cozinha("Cozinha mineira", 14, 20, "Feijoada",$arrM);

var_dump($cozinha_mineira); //Retorna os ingredientes da cozinha mineira

//Cozinha Chinesa

$arr_ingredientesC = array(
  "Champignon",
  "Brócolis",
  "Macarrão",
  "Carne"
);

$arrC = array();

foreach($arr_ingredientesC as $value)
{
  $arrC[] = new Ingrediente($value);
}

$cozinha_chinesa = new Cozinha("Cozinha chinesa", 10, 23, "Yakissoba",$arrM);


var_dump($cozinha_chinesa); //Retorna os ingredientes da cozinha chinesa