<?php
echo "<h4>Receber os dados de cada campo individualmente</h4>";

$nome_cliente = filter_input(INPUT_POST, "nome_cliente", FILTER_SANITIZE_STRING);

$email_cliente = filter_input(INPUT_POST, "email_cliente", FILTER_SANITIZE_STRING);

$senha_cliente = filter_input(INPUT_POST, "senha_cliente", FILTER_SANITIZE_STRING);

echo "Nome do cliente: $nome_cliente <br><br>";

echo "E-mail do cliente: $email_cliente <br><br>";

echo "Senha do cliente: $senha_cliente <br><br>";


echo "<hr>";
echo "<h4>Receber os dados de todos os campos com filter_input_array</h4>";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

echo "Nome do cliente: ". $dados['nome_cliente'] ." <br><br>";

echo "E-mail do cliente: ". $dados['email_cliente'] ." <br><br>";

echo "Senha do cliente: ". $dados['senha_cliente'] ." <br><br>";
