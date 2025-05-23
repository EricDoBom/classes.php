<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1 ->titulo = "Coca-cola";
$prod1 ->descricao = "Refrigerante 350ml";
$prod1 ->preco = 3.50;


$prod2 = clone $prod1;
$prod2 -> preco = 3.40;

function alterarProduto($produto)
{
    $produto -> titulo = "Skol Litrão";
    return $produto;
}
$prod3 = alterarProduto(clone $prod1);
var_dump($prod1);
echo"<br>";
var_dump($prod2);
echo"<br>";
var_dump($prod3);

