<?php
/*
12 – No estoque tem 115 unidades do produto “A”. Implemente um programa
para imprimir na tela o nome do produto, a quantidade de produto que há no
estoque em seguida retirar do estoque 1 unidade do produto “A” usando o pré
decremento, imprima na tela a quantidade de produto que está sendo retirado
do estoque. No final do programa imprima na tela a quantidade de produtos
que restaram no estoque.

*/

$estoque_produto_a = 115;
$nome_produto_a = 'Sei la';
echo "$nome_produto_a tem no estoque $estoque_produto_a <hr>";
echo "  esta sendo retirado  do estoque uma unidade<hr> ";
$estoque_produto_a--;
echo "$nome_produto_a tem no estoque $estoque_produto_a <hr>";
