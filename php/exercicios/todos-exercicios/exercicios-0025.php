<?php 
/*
25 – Implemente um programa que receba o código do status da compra e
imprima o nome status conforme a tabela abaixo.
CódigoStatus
1Aguardando pagamento
2Pago
3Em transporte
4Entregue
Nome do projeto – exercicio0025.php
WWW.CELKE.COM.B


*/
$status = 3;

if($status == 1){
    echo "Aguardando pagamento";
}else if($status == 2) {
    echo "Pago";
}else if($status == 3) {
    echo "Em transporte";
}else if($status == 4) {
    echo "Entregue";
}