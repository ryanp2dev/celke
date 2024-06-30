<?php 
/*
Implemente um programa utilizando função recursiva para imprimir os
itens de um menu, conforme a imagem abaixo. Os números “1,2,3,4 e 5” são
os itens de menu que devem ser impresso fora da função. Em cada item de
Menu tem os Submenu “5,6,7,8, 9 e 10”, sendo o Submenu, deve ser impresso
através da função recursiva.

*/

// function exibe($num){
//     if($num < 0) {
//         echo " menu :$num <br>";
//         $qnt = $num + 1;
//         exibe($qnt);
//     }

// }

// exibe(10);
// ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Funcoes Recursivas </title>
	</head>
	<body>
		<?php			
			function exibe($num){
				if($num <= 10){
					echo "Item do Submenu: $num <br>";
					exibe($num+1);
				}				
			}
			
			echo "Item de menu: 1 <br>";
			exibe(5);			
			
			echo "<br>Item de menu: 2 <br>";
			exibe(5);			
			
			echo "<br>Item de menu: 3 <br>";
			exibe(5);			
			
			echo "<br>Item de menu: 4 <br>";
			exibe(5);			
			
			echo "<br>Item de menu: 5 <br>";
			exibe(5);
		?>
	</body>
</html>



