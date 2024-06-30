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


