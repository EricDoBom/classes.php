<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";


$prod1 = new Produto;
$prod1 ->titulo = "Vinho";
$prod1 ->descricao = "Garrafa 500ml";
$prod1 ->preco = 32.99;

$prod2 = new Produto;
$prod2 ->titulo = "Doritos";
// $prod2 ->descricao = "Salgadinho";
$prod2 ->preco = 13.00;

var_dump($prod1);
echo "<br>";
var_dump($prod2);
echo "<br>";

$cli = new Cliente;
$cli ->nome = "Eric";
$cli ->idade = 27;
$cli ->endereco = "Rua B, 321";
$cli ->telefone = "(41)XXXXX-XXXX";
$cli ->comprar();



