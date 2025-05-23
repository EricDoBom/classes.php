<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";


$Prod1 = new Produto;
$Prod1 ->titulo = "Fanta";
$Prod1 ->descricao = "Refrigerante 1l";
$Prod1 ->preco = 5.49;

$Prod2 = new Produto;
$Prod2 ->titulo = "Doritos";
$Prod2 ->descricao = "salgadinho";
$Prod2 ->preco = 13.5;

var_dump ($Prod1);
echo "<br>";
var_dump ($Prod2);
echo "<br>";

$cli = new Cliente;
$cli-> nome = "Lucas";
$cli -> idade = "21";
$cli-> endereco = "Rua A, 142";
$cli-> telefone = "(41)xxxx-xxxx";
$cli->comprar();


