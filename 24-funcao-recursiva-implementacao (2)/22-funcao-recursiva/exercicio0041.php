<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Funcoes Recursivas </title>
	</head>
	<body>
		<?php		
			//Criar as variáveis
			$area_hectare = 1287;
			$metro_hectare = 5267;
			$custo_cubico = 0.17;
			$num_safra = 1;
			$qnt_agua_ano = 0;
			$custo_safra_ano = 0;
			$custo_cinco_anos = 0;
			$custo_implantacao = 1000;
			
			//chamar a função
			$custo_cinco_anos = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico, $num_safra, $qnt_agua_ano, $custo_safra_ano, $custo_cinco_anos);
						
			/************************ Função **********************************/
			/************************ Calcular o custo safra ******************/
			function calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico, $num_safra, $qnt_agua_ano, $custo_safra_ano, $custo_cinco_anos){
				
				//Calcular o gasto da safra
				$qnt_agua = $area_hectare * $metro_hectare;
				$custo_implantacao = ($custo_implantacao * $area_hectare) + ($qnt_agua * $custo_cubico);
				
				//Calcular os gasto dos ano
				$qnt_agua_ano += $qnt_agua;
				$custo_safra_ano += $custo_implantacao;
				
				//imprimir os custos da safra
				echo "<h3>".$num_safra."° Safra</h3>";
				echo "Quantidade de m³ gasto de agua: " . number_format($qnt_agua, 0,",",".") . " m³<br>";
				echo "Custo safra: R$ " . number_format($custo_implantacao, 2,",",".") . "<br>";	
				
				//Acessa o IF caso seja Terceira safra do ano, para isso realiza a divisão pelo 3, caso o resto seja 0 indica que é terceira safra, exemplo (3 safra % 3 = 0)
				if($num_safra % 3 == 0){										
					echo "Quantidade de m³ gasto de agua no ano: " . number_format($qnt_agua_ano, 0,",",".") . " m³<br>";
					echo "Custo ano: R$ " . number_format($custo_safra_ano, 2,",",".") . "<br><hr>";
					$custo_cinco_anos += $custo_safra_ano;
					$custo_safra_ano = 0;	
					$qnt_agua_ano = 0;	
				}
				
				//A variável "$num_safra" que representa quantidade de safra seja menor que 15 acessa o IF para chamar novamente a função de dentro da função, Senão acessa o ELSE, pois já percorreu os 5 anos
				if($num_safra < 15){					
					
					//Sendo a safra menor que 12 necessário acrescentar R$ 1000,00 de implantação
					if($num_safra < 12){
						$custo_implantacao = 1000;
					}else{
						$custo_implantacao = 0;
					}					
					//Todas as vezes que passar pela função acrescentar mais 1 na quantidade de safras
					$num_safra++;
					
					//Chamar novamente a função
					$qnt_agua = calculasafra($custo_implantacao, $area_hectare, $metro_hectare, $custo_cubico, $num_safra, $qnt_agua_ano, $custo_safra_ano, $custo_cinco_anos);
				}else{
					/************************Conclusão após 5 anos *******************/		
					echo "Custo de 5 anos: R$ " . number_format($custo_cinco_anos, 2,",",".") . "<br><hr>";
				}
			}
		?>
	</body>
</html>


