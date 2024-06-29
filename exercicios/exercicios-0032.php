<?php 
/*
32 – Implemente o programa que receba um valor, e imprima mais 50 números
após o recebido, e também a data e a hora da impressão. Utilizando o FOR.
Nome do projeto – exercicio0032.php
*/
new DateTimeZone('America/Campo_Grande');
$i= 1000;
$valor = $i + 50; 
for ($i ; $i <= $valor; $i++){
    echo "$i <br>" .  date('d/m/Y H:i') . "<hr>";
}
