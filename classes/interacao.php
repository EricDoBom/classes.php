<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1 ->titulo = "Coca-cola";
$prod1 ->descricao = "Refrigerante 350ml";
$prod1 ->preco = 3.50;

foreach($prod1 as $nome => $valor){
    echo "$nome: $valor";
    echo "<br>"
}