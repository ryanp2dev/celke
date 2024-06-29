<?php 

/*
30 – Implemente o programa que receba um valor acima de 100, sendo maior
de 100 acessa o DO WHILE e imprime os valores de 100 até o valor recebido,
usando o DO WHILE, senão imprime a mensagem "Número inválido".
Nome do projeto – exercicio0030.php
*/

$valor = 100;
$digitador =1;
if($digitador <=100){
    echo "numero invalido";
}else {
    do {
        echo $valor++ . "<br>";
    } while ($valor <= $digitador);
}