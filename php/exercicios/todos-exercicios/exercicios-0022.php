<?php 
/*22 – A empresa concederá um aumento de salário para seus funcionários,
variável de acordo com o cargo, conforme tabela abaixo. Implemente o
programa que leia o salário e o código do cargo de cada funcionário, e calcule
o novo salário. Se o cargo do funcionário não estiver na tabela, ele deverá,
então, receber 35,5% de aumento. Imprima o salário antigo, o novo salário e a
diferença.
CódigoCargoPercentual
91Gerente10%
92Analista20%
93Técnico30%
Nome do projeto – exercicio0022.php
*/

$salario =1000 ;
$codigo =93 ;

if($codigo == 91) {
    $aumentoSalarial = ($salario * 10) / 100;
    $salarioComAumento = $salario + $aumentoSalarial;
    echo "Salario antigo $salario, novo salario $salarioComAumento com a diferença de $aumentoSalarial ";


}else if($codigo == 92){
    $aumentoSalarial = ($salario * 20) / 100;
    $salarioComAumento = $salario + $aumentoSalarial;
    echo "Salario antigo $salario, novo salario $salarioComAumento com a diferença de $aumentoSalarial ";


}else if($codigo == 93) {
    $aumentoSalarial = ($salario * 30) / 100;
    $salarioComAumento = $salario + $aumentoSalarial;
    echo "Salario antigo $salario, novo salario $salarioComAumento com a diferença de $aumentoSalarial ";


}else {
    $aumentoSalarial = ($salario * 35.5) / 100;
    $salarioComAumento = $salario + $aumentoSalarial;
    echo "Salario antigo $salario, novo salario $salarioComAumento com a diferença de $aumentoSalarial ";


}