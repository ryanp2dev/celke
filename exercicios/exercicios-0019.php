<?php 

/*
19 –Implemente um programa que receba dois números e imprima o maior ou
apresente que são iguais.
Nome do projeto – exercicio0019.php
*/

$n1 = 100;
$n2 = 100;

if($n1 > $n2){
    echo "Numero maior $n1";
}else if($n2 > $n1) {
    echo "Numero maior $n2";
}else if($n1 ==$n2){
    echo "Numeros são iguais $n1 e $n2";
}