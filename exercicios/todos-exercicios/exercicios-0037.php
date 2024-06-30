<?php 
/*
37 – Implemente um programa para receber quantos contêiner devem ser
carregados no navio e quantos já foram carregados. Utilize uma função para
verificar o status do carregamento e imprima na tela a mensagem
“Carregamento concluído” quando o carregamento for finalizado.
Nome do projeto – exercicio0037.php


*/


function carregamento($total,$quantosCarregados) {
    if($total == $quantosCarregados){
        $msg = "Carregamento concluído";
    }
    return $msg;
}

echo carregamento(10,10);