<?php 
/*
31 – Implemente um programa que receba dois valores quaisquer, verifica qual
número é maior, sendo o primeiro número ou o segundo número. Sabendo qual
é o número maior e menor, imprime todos os números intermediários a eles,
usando o DO WHILE.
Nome do projeto – exercicio0031.php
*/
$a = 102;
$b = 10000;


if($a> $b) {
    do {
        echo $b++ . "<br>";
    } while ($b <= $a);
}else {
    do {
        echo $a++ . "<br>";
    } while ($a <= $b);
}