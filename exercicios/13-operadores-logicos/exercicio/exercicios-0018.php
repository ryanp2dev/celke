<?php 

/*
18 – Em uma determinada escola, um aluno é recomendado para obter bolsa
de estudo somente se possuir média acima de 8,5 e ter frequência maior que
70%. Implemente um programa que receba as informações do aluno e imprima
se o mesmo pode ou não receber bolsa.
Nome do projeto – exercicio0018.php18 – Em uma determinada escola, um aluno é recomendado para obter bolsa
de estudo somente se possuir média acima de 8,5 e ter frequência maior que
70%. Implemente um programa que receba as informações do aluno e imprima
se o mesmo pode ou não receber bolsa.
Nome do projeto – exercicio0018.php

*/
$media =8.6;
$frequencia = 72;
if($media > 8.5 && $frequencia > 70) {
    echo "Aluno pode receber a bolsa";
}else {
    echo "Aluno não pode receber bolsa ";
}