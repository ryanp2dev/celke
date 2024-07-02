<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <label for="nome">
            Nome
            <input  type="text" id='nome' name='nome' placeholder="Digite o nome">
        </label>

        <label for="email">
            Email
            <input  type="email" id='email' name='email' placeholder="Digite o seu melhor email">
        </label>
        <label for="senha">
            Senha:
            <input  type="password" id='senha' name='senha' placeholder="Digite a sua senha">
        </label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>