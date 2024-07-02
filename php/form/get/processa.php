<?php 
echo "Receber os dados do form get <hr>";
$nome_cliente = filter_input(INPUT_GET,"nome",FILTER_DEFAULT);
$email_cliente = filter_input(INPUT_GET,"email",FILTER_SANITIZE_EMAIL);
echo $nome_cliente ."<hr>" . $email_cliente;