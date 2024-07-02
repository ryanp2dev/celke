<?php 
/*
17 – Um atleta precisa saber qual sua categoria ao disputar o campeonato.
Implemente um programa para receber o peso e a altura, e imprima a categoria
de acordo com a tabela
PesoAlturaCategoria
>= 50 e < 60< 1,70Novato
>= 60 e <= 80>= 1,70 e < 1,90Profissional
Nome do projeto – exercicio0017.php

*/

$peso = 60;
$altura = 1.70;
if($peso >= 50 && $peso < 60 && $altura < 1.70) {
    echo "novato";
}else if($peso >= 60 && $peso <= 80 && $altura >= 1.70 && $altura < 1.90){
    echo "Profissional";
}