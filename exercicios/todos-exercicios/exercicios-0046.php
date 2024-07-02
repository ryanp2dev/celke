<?php
/*
 Implemente  uma  página  para  verificar  se  existe  o  cookie  com  o  ID  do 
produto  visitando,  caso  não  exista  o  cookie,  criar  o  cookies  com  o  ID  do 
produto visitado, esse cookie deve ter a duração de 180 dias. 

*/

setcookie("ID","produto  visitando" , (time() + (180 * 24 * 60 * 60)));
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
    if(isset($_COOKIE['ID'])){
        echo $_COOKIE['ID'];
    }else {
        echo "Nunca visitou";
    }
    
    ?>
</body>
</html>

