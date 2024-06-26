<?php 

/*

 5 – Implemente um programa para somar a comissão de R$ 2.320,29 mais o
salário de R$ 7.600,25. No final do programa imprima na tela o valor da soma.
Também converta o valor para o formato do Real, imprima o valor formatado
para o modelo do Real, usando a função “number_format”.
Nome do projeto – exercicio0005.php
6 – Implemente um programa para somar a comissão de R$ 1.321,45 mais o
salário de R$ 7.600,25, também subtrair R$ 608,45 de INSS, e subtrair R$
1.364,65 de IRRF. No final do programa imprima na tela o valor total a receber.
Também converta o valor para o formato do Real, imprima o valor formatado
para o modelo do Real, usando a função “number_format”.
Nome do projeto – exercicio0006.php
7 – A cliente quer parcelar a compra de R$ 1.220,44 em 4 vezes sem juros.
Implemente um programa para calcular o valor de cada parcela, no final do
programa imprima na tela o valor de cada parcela. Também converta o valor
para o formato do Real, imprima o valor formatado para o modelo do Real,
usando a função “number_format”.
Nome do projeto – exercicio0007.php
8 – A empresa vendeu 58 unidades do produto “A” no valor de R$ 280,74 cada
unidade no mes de Junho, qual é o valor total da venda no mês de Junho do
produto “A”? Implemente um programa para calcular o valor, no final do
programa imprima na tela o valor total. Também converta o valor para o
formato do Real, imprima o valor formatado para o modelo do Real, usando a
função “number_format”.
Nome do projeto – exercicio0008.php
WWW.CELKE.COM.BR
1*/

?>

<?php
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message
/*
Implemente um programa para somar a comissão de R$ 2.320,29 mais o
salário de R$ 7.600,25. No final do programa imprima na tela o valor da soma.
Também converta o valor para o formato do Real, imprima o valor formatado
para o modelo do Real, usando a função “number_format”

*/

$comissao = 2320.29;
$salario = 7600.25;
$salario_total = $comissao + $salario;
echo number_format($salario_total,2,",",".");
?>



<?php
/*
6 – Implemente um programa para somar a comissão de R$ 1.321,45 mais o
salário de R$ 7.600,25, também subtrair R$ 608,45 de INSS, e subtrair R$
1.364,65 de IRRF. No final do programa imprima na tela o valor total a receber.
Também converta o valor para o formato do Real, imprima o valor formatado
para o modelo do Real, usando a função “number_format”.
Nome do projeto – exercicio0006.php
*/
$comissao = 1321.45;
$salario = 7600.25;
$salario_bruto = $comissao + $salario;
$inss = 608.45;
$irrf = 1364.65;
$salario_liquito = $salario_bruto - $inss -$irrf;
echo "R$ " . number_format($salario_liquito,2,",",".");
?>


