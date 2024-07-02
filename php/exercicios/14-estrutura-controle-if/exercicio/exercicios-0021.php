<?php 
/*
21 – Implemente um programa que receba o sexo e a idade da pessoa. Se a
pessoa for do sexo feminino e tiver igual ou mais de 18 anos e menos que 25
anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e
a mensagem: NÃO ACEITA.
*/

$idade = 24;
$sexo = "f";
if($sexo == 'f' && $idade >= 18 && $idade < 25){
    echo "Aceita";
}else {
    echo "Não aceita";
}