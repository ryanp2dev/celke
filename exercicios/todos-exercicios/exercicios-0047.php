<?php 
/*
47 – Implemente uma página para verificar se existe o cookie com a chave do 
usuário  logado,  caso  exista  somente  imprimir  o  valor,  caso  não  exista  criar  o 
cookie com a duração de 2 horas

*/
setcookie("chave","Usuario Logado", (time() + (2*60*60)))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['chave'])){
            echo $_COOKIE['chave'];
        }else {
            echo "Usuario não logado";
            
        }
    ?>
</body>
</html>
