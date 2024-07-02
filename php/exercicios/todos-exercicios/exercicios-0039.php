<?php 
/*
39 – A fazenda “A” está implementado um sistema de irrigação subterrânea e
necessita calcular o gasto de agua em cada safra em m³, o total de m³ gasto de
agua no ano, o custo em Reais de cada safra, o custo total do ano e o custo
total ao longo de 5 anos. Seguindo os critérios abaixo.
- A fazenda possui 1287 hectares.
- Realiza 3 safras no ano, em cada safra é gasto 5267 m³ de agua por hectare.
- Cada m³ tem o custo de R$ 0,17.
- Em cada hectare deve ser acrescentado o custo da implantação do sistema
de irrigação no valor de R$ 1000,00 nas 12 primeiras safras.
Implemente o sistema que receba os dados acima citado, também uma função
para calcular o custo safra, a mesma recebe parâmetro por referência o custo
de implantação, recebe parâmetro por valor: a área em hectares, m³ gasto de
agua por hectare e o custo cúbico. A função realiza o cálculo de quantidade de
m³ gasto de agua na safra e custo de irrigação da safra, em seguida imprime a
quantidade de m³ gasto de agua na safra e o valor gasto em irrigação na safra.
A função retorna quantidade de m³ gasto de agua.
Após cada 3 safras necessário imprimir a quantidade de m³ gasto de agua no
ano, imprimir o custo das 3 safras do ano. No final do programa imprimir o
custo total dos 5 anos.
Nome do projeto – exercicio0039.php
*/

$hectares = 1287;
$totalDeSafraAno = 3;
$gastoPorHectate = 5267;
$custoPorM3 = 0.17;
$gastoNaDozeSafras = 1000.00;


$totalPorAnoComAgua =  $hectares * ($gastoPorHectate * $custoPorM3);
$totalDeGastoPorHectares = ($custoPorM3 * $gastoPorHectate);
echo number_format($totalPorAnoComAgua,2,",",".");
function calcularSafra($hectares,$totalDeSafraAno,$gastoPorHectate,$custoPorM3,$gastoNaDozeSafras)
{
    // metodo para calulo por no de metodos cubicos 
    $totalPorAnoComAgua =  $hectares * ($gastoPorHectate * $custoPorM3);

    //
};