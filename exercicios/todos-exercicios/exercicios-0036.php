<?php 
/*
Função
36 – Implemente um programa com uma função que receba o código do status
da compra e imprima o nome status conforme a tabela abaixo.
CódigoStatus
1Aguardando pagamento
2Pago
3Em transporte
4Entregue
Nome do projeto – exercicio0036.php



*/

function status($status) {
    

switch ($status) {
    case 1:
        $mensagem  = "Aguardando pagamento";
        break;
    case 2:
        $mensagem  = "Pago";
        break;
    case 3:
        $mensagem  = "Em transporte";
        break;
    case 4:
        $mensagem  = "Entregue";
        break; 
    default:
        $mensagem  = "Nenhuma opcao selecionada";
        break;
        
}

    return $mensagem;

}

echo status(3);