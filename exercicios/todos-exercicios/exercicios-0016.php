<?php 

/*
16 – Um atleta precisa saber qual sua categoria ao disputar o campeonato.
Implemente um programa para receber o peso, e imprima a categoria de
acordo com a tabela:

    Peso    CAtegoria
    <=50    novato
    >       Profissional 
    
Nome do projeto – exercicio0016.php
*/
$peso = 51;
if($peso <= 50) {
    echo "Novato";
}else {
    echo "Profissional";
}