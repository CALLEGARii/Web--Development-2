<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>My first PHP page</h1>

    <p>

    <?php
    echo "<p>hello World!</p>";

    $nome = "Rafael";
    $data = date("d/m/y");
    $hora = date("h:i");

    echo "<p>Olá, meu nome é <b>$nome</b>. Hoje é dia <b>$data</b> e agora são <b>$hora</b> horas</p>";

            ?>
    </p>
    <hr>
    <a href="http://localhost/Aula/rafael/">/rafael</a>
    
</body>
</html>