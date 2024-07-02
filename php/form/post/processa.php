<?php 
echo "Receber os dados do form POST <hr>";
$nome_cliente = filter_input(INPUT_POST,"nome",FILTER_DEFAULT);
$email_cliente = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
$email_senha = filter_input(INPUT_POST,"senha",FILTER_DEFAULT);
echo $nome_cliente ."<hr>" . $email_cliente ."<hr>" . $email_senha;

$NAO_RECOMENDADO = $_POST['nome'];
echo "Nao recomendado <hr>";
echo $NAO_RECOMENDADO;
echo "<hr>";
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
foreach($dados as $dado){
    var_dump($dado); 
    echo $dado . "<br>";
}