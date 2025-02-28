<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

    <div class="container">

        <h1 class="my-3">Destino GET</h1>
        <hr>
        <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
        
        echo "<p> Nome informado: $nome<br>Email: $email</p>";
        ?>bmewburn.vscode-intelephense-client

        <a href="<?php echo "http://localhost/DestinoGET/index.php?cor=$cor&nome=Rafael&email=rafael@gmail.com " ?>">
            Enviar dados [nome = Rafael | email = rafael@gmail.com]
        </a>
        <br>
        <br>

        <a href="<?php echo "http://localhost/DestinoGET/index.php?cor=$cor&nome=Alexandre&email=xaxande@gmail.com"?>">
            Enviar dados [nome = Alexandre | email = xaxande@gmail.com]
        </a>
        <br>
        <br>
        <a href="http://localhost/DestinoGET/index.php">
            Limpar tudo
        </a>
        <br>
        <br>

        <div>
            2 <a href="<?php echo "http://localhost/DestinoGET/index.php?cor=red&nome=$nome&email=$email"?>">
                <img src="img/red.webp" class="float-start" alt="">
            </a>
            <a href="<?php echo "http://localhost/DestinoGET/index.php?cor=green&nome=$nome&email=$email"?>">
                <img src="img/green.webp" class="float-start" alt="">
            </a>

            <a href="<?php echo "http://localhost/DestinoGET/index.php?cor=blue&nome=$nome&email=$email"?>">
                <img src="img/blue.webp" class="float-start" alt="">
            </a>

        </div>

        <style>
        img {
            width: 400px;
            margin: 5px;
            border: solid 2px black;
            cursor: grab;
        }

        body {
            background-color: <?php echo $cor ?>;

        }
        </style>
    </div>
</body>

</html>