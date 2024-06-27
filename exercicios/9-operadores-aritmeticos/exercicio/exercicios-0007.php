<?php
/*
7 – A cliente quer parcelar a compra de R$ 1.220,44 em 4 vezes sem juros.
Implemente um programa para calcular o valor de cada parcela, no final do
programa imprima na tela o valor de cada parcela. Também converta o valor
para o formato do Real, imprima o valor formatado para o modelo do Real,
usando a função “number_format”.
Nome do projeto – exercicio0007.php

*/

$valor_total = 1220.44;
$qtd_parcela = 4;
$valor_da_parcela= $valor_total / $qtd_parcela;

echo "Valor da Parcela " . number_format($valor_da_parcela,2,',','.');