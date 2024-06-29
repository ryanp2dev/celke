<?php

/*
27 – Implemente um programa que receba o código do status da compra e
imprima o nome status conforme a tabela abaixo, usando o SWITCH
CódigoStatus
1Aguardando pagamento
2Pago
3Em transporte
4Entregue
Nome do projeto – exercicio0027.php
*/

$status = 0;
switch ($status) {
    case 1:
        echo "Aguardando pagamento";
        break;
    case 2:
        echo "Pago";
        break;
    case 3:
        echo "Em transporte";
        break;
    case 4:
        echo "Entregue";
        break; 
    default:
        echo "Nenhuma opcao selecionada";
        break;
}

