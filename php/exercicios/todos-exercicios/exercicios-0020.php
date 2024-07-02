<?php 
/*

Um mercado está vendendo produtos com a seguinte tabela de preços:
Total de compras até 10KgTotal de compras acima de 10Kg
Amoras: R$ 3,00 p/KgAmoras: R$ 2,00 p/Kg
Implemente o programa para receber a quantidade de quilos, e imprima o valor
a ser pago.
Nome do projeto – exercicio0020.php


*/
$kg = 20;
if($kg <=10){
    echo "Valor a pagar " . $kg *  3;
}else if($kg > 10) {
    echo "Valor a pagar " . $kg *2;
}