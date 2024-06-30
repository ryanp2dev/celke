<?php 

/*

38 – Implemente um programa que receba o custo de produção, em seguida
implemente uma função recebendo parâmetro por referência o custo de
produção, e na função acrescente 70% de lucro sobre o custo de produção. No
final do programa imprima o valor final do produto fora da função.
Nome do projeto – exercicio0038.php
*/

function custo ($custo,$lucro = 70){
    $lucroProducao =  ($lucro / 100) * $custo;
    return $lucroProducao + $custo;
}

echo custo(1000);