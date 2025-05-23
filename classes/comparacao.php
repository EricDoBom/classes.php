<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1 ->titulo = "Coca-cola";
$prod1 ->descricao = "Refrigerante 350ml";
$prod1 ->preco = 3.50;

$prod2 = new Produto;
$prod2 ->titulo = "Coca-cola";
$prod2 ->descricao = "Refrigerante 350ml";
$prod2 ->preco = 3.50;

var_dump($prod1 == $prod2); // Tipo e Propriedade
echo"<br>";
var_dump($prod1 === $prod2); // Referência !==
echo"<br>";

$prod3 = new Produto;
$prod3 ->titulo = "Coca-cola";
$prod3 ->descricao = "Refrigerante 350ml";
$prod3 ->preco = 3.50;
var_dump($prod1 == $prod3);
$prod4 = $prod1;
echo"<br>";
var_dump($prod1 === $prod4);