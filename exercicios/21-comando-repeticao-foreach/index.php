<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Foreach</title>
</head>

<body>
    <?php

    $alunos = ["A", "B", "C", "D"];
    //var_dump($alunos);

    foreach($alunos as $aluno){
        echo "Nome: $aluno <br>";
    }

    ?>
</body>

</html>