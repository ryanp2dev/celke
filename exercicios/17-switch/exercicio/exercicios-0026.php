<?php 

/*
26 – Implemente o programa usando o SWITCH que receba o código
correspondente ao cargo de um funcionário e o seu salário atual e imprima o
cargo, o salário atual, o valor do aumento e seu novo salário. Os cargos estão
na tabela a seguir.
CódigoCargoPercentual
1Escriturário50%
2Secretário35%
3Caixa20%
4Gerente10%
5Diretor05%
Nome do projeto – exercicio0026.php
*/
$codigo = 5;  
switch ($codigo) {
    case 1:
        echo "Cargo Escriturário 50%";
        break;
    case 2:
        echo "Cargo Secretário 35%";
        break;
    case 3:
        echo "Cargo Caixa 20%";
        break;
    case 4:
        echo "Gerente 10%";
        break;
    case 5:
        echo "Cargo Diretor 05%";
        break;
                                        
    default:
        echo "Nenhuma opcao valida selecionada";
        break;
}