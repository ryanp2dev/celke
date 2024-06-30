<?php 

/*
35 – Uma Empresa fez uma pesquisa de mercado para saber se as pessoas
gostaram ou não de um novo produto lançado no mercado. Obtendo o seguinte
resultado “S-S-S-N-S-N-N-S-S-S-S-N-S-S-N-S-S-S” (S - Sim ou N - Não).
Implemente um programa que calcule e mostre:
- o número de pessoas que respondeu sim;
- o número de pessoas que respondeu não;
Nome do projeto – exercicio0035.php

*/
$s = 0;
$n = 0;
$op = [
    "S","S","S","N","S","N","N","S","S",'S','S','N','S','S','N','S','S','S'
];
foreach($op as $id){
    if($id == "S"){
        $s++;
    }else{
         $n++;
    }
}
echo "S:$s <br> N:$n";