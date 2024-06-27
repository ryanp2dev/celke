<?php
/*
11 – A empresa vendeu 58 unidades do produto “A” no valor de R$ 280,74
cada unidade no mes de Junho, qual é o valor total da venda no mês de Junho
do produto “A”? Implemente um programa usando operadores de atribuição
para calcular o valor, no final do programa imprima na tela o valor total.
Também converta o valor para o formato do Real, imprima o valor formatado
para o modelo do Real, usando a função “number_format”.
Nome do projeto – exercicio0011.php
*/

$qnt_unidades= 58;
echo "Valor total das vendas " . number_format(($qnt_unidades*= 280.74),2,',','.');