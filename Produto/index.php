<?php 
include 'Produto.php';

$produto = new Produto();
$produto->setNome("Mouse");
$produto->setValor(129.65);

echo $produto->getValor();
echo $produto->getNome();

?>