<?php 
/*
Implemente o programa que receba a nota e imprima o conceito que a
nota vale conforme a tabela abaixo:
MÉDIA PONDERDACONCEITO
8,0 à 10,0A
7,0 à 7,9B
6,0 à 6,9C
5,0 à 5,9D
0,0 à 4,9E
Nome do projeto – exercicio0024.php
*/

$media = 2;
if($media >= 8 && $media <=10){
    echo "A";
}else if($media >= 7 && $media <=7.9){
    echo "B";
}else if($media >= 6 && $media <=6.9){
    echo "C";
}else if($media >= 5 && $media <=5.9){
    echo "D";
}else if($media >= 0.0 && $media <=4.9){
    echo "E";
}