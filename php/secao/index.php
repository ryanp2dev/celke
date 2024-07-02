<?php
session_start();
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
    //Criar secao 
    $_SESSION['id'] = 2;
    $_SESSION['nome'] ="RYan";
    
    // Verificar se existe 
    if(isset($_SESSION['id'])){
        echo $_SESSION['id'] ."<br>". $_SESSION['nome'] ;
    }else {
        echo "erro";
    }
    // Excluir a sessao 
    unset($_SESSION['id'],$_SESSION['nome']);
// Verificar se existe 
if(isset($_SESSION['id'])){
    echo $_SESSION['id'] ."<br>". $_SESSION['nome'] ;
}else {
    echo "<br>erro";
}

   
   ?>
    
</body>
</html>