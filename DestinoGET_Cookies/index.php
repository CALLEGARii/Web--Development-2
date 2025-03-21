<?php
if (isset($_GET["nome"])) {
    setcookie("nome", $_GET["nome"], time() + 3600);
}
if (isset($_GET["email"])) {
    setcookie("email", $_GET["email"], time() + 3600);
}
if (isset($_GET["cor"])) {
    setcookie("cor", $_GET["cor"], time() + 3600);
}

$nome = $_GET["nome"] ?? $_COOKIE["nome"] ?? "Desconhecido";
$email = $_GET["email"] ?? $_COOKIE["email"] ?? "Sem email";
$cor = $_GET["cor"] ?? $_COOKIE["cor"] ?? "#FFFFFF";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino GET com Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: <?php echo $cor; ?>;">

    <div class="container">
        <h1 class="my-3">Destino GET com Cookies</h1>
        <hr>

        <p>Nome informado: <?php echo $nome; ?><br>Email: <?php echo $email; ?></p>

        <a href="index.php?cor=red&nome=Rafael&email=rafael@gmail.com">
            Enviar dados [nome = Rafael | email = rafael@gmail.com]
        </a>
        <br><br>

        <a href="index.php?cor=green&nome=Alexandre&email=xaxande@gmail.com">
            Enviar dados [nome = Alexandre | email = xaxande@gmail.com]
        </a>
        <br><br>

        <a href="index.php">
            Limpar tudo
        </a>
        <br><br>

        <div>
            <a href="index.php?cor=red&nome=<?php echo $nome; ?>&email=<?php echo $email; ?>">
                <img src="img/red.webp" class="float-start" alt="Red">
            </a>
            <a href="index.php?cor=lightgreen&nome=<?php echo $nome; ?>&email=<?php echo $email; ?>">
                <img src="img/green.webp" class="float-start" alt="Green">
            </a>
            <a href="index.php?cor=blue&nome=<?php echo $nome; ?>&email=<?php echo $email; ?>">
                <img src="img/blue.webp" class="float-start" alt="Blue">
            </a>
        </div>

        <style>
            img {
                width: 400px;
                margin: 5px;
                border: solid 2px black;
                cursor: pointer;
            }
        </style>
    </div>
</body>
</html>