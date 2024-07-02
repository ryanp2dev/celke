<?php 
setcookie("afiliados","0001",(time() + ( 7 * 24*3600)));
setcookie("logado","Cesar", (time() + (7 * 3600 ) ));

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
// setandos os cookiess 


if(isset($_COOKIE['afiliados'])){


    echo "Numero do Afiliado: ". $_COOKIE["afiliados"] ;

}else {
    echo "erro";
}
echo "<hr>";
if(isset($_COOKIE['logado'])){
    echo "Usuario Logado: " . $_COOKIE['logado'];
}else {
    echo "precisa logar ";
}
?>
</body>
</html>