<?php
   $a = 2;
   $b = 4;
   $c = 7;

    $result_soma = $a + $b;
    echo  "Soma: " .$result_soma;
    echo "<hr>";
    
    $result_subtracao = $b - $a;
    echo "Subtracao: "  . $result_subtracao;
    echo "<hr>";


    $result_multi = $a * $b;
    echo  "Multiplicacao: " .$result_multi;
    echo "<hr>";

    $result_divisao = $b / $a;
    echo  "Divisao: " .$result_divisao;
    echo "<hr>";
    
    $result_resto = $c % $a;
    echo  "Resto: " .$result_resto;
    echo "<hr>";

   $cc = 38564.32 ;
   echo  "Valor na conta corrente: R$" . number_format($cc,2,',','.') . '<br>';
   
   $debito = 200.16;
   echo  "Valor do debito: R$ " . number_format($debito,2,',','.') . "<br>";

   $result_real = $cc - $debito;
   echo "Saldo: R$" . number_format($result_real,2,',','.')
?>