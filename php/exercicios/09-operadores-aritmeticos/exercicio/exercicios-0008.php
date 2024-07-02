<?php
/*
8 – A empresa vendeu 58 unidades do produto “A” no valor de R$ 280,74 cada
unidade no mes de Junho, qual é o valor total da venda no mês de Junho do
produto “A”? Implemente um programa para calcular o valor, no final do
programa imprima na tela o valor total. Também converta o valor para o
formato do Real, imprima o valor formatado para o modelo do Real, usando a
função “number_format”.
Nome do projeto – exercicio0008.php

*/

$produto_a = 280.74;
$qtd = 58;
$fechamento = $produto_a * $qtd;
echo "Valor total de vendas do Produto A: " . number_format($fechamento,2,',','.');