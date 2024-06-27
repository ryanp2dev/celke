<?php 
/*
9 – Implemente um programa usando operadores de atribuição para somar a
comissão de R$ 1.321,45 mais o salário de R$ 7.600,25, também subtrair R$
608,45 de INSS, e subtrair R$ 1.364,65 de IRRF. No final do programa imprima
na tela o valor total a receber. Também converta o valor para o formato do
Real, imprima o valor formatado para o modelo do Real, usando a função
“number_format”.
Nome do projeto – exercicio0009.php
*/

$comissao = 1321.45;
$salario = 7600.25;
$inss = 608.45;
$irrf = 1364.65;

$salario_bruto += $comissao; 
$salario_bruto += $salario;

$desconto += $inss;
$desconto +=$irrf;
$salario_bruto -= $desconto;
$salario_liquito = $salario_bruto;
echo "Total a receber: " . number_format($salario_liquito,2,'.',',');