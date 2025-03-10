<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3 - Números primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body{
            margin-top: 1vh;
            font-size: large;
        }
        .numero-box {
            display: inline-block;
            padding: 5px 10px;
            border: 2px solid green;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin: 5px;
        }
        .primo {
            background-color: lightgreen;
        }
        .nao-primo {
            background-color: lightcoral;
            border-color: red;
        }
    </style>
</head>
<body class="container mt-4">
    <h2 class="text-center mb-3">Praticando 3 - Números primos</h2>  
    <div class="text-center mb-4">
        <?php
        $numeros = [1, 2, 3, 5, 20, 32, 37]; // Números conforme a imagem
        foreach ($numeros as $num) {
            echo "<a href='?numero=$num' class='me-3 text-primary text-decoration-none'>Número $num</a>";
        }
        ?>
    </div>
    <?php
    function ehPrimo($numero) {
        if ($numero < 2) return false;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (isset($_GET['numero'])) {
        $numero = intval($_GET['numero']);
        $primo = ehPrimo($numero);
        $paridade = ($numero % 2 == 0) ? "PAR" : "ÍMPAR";
        $classePrimo = $primo ? "primo" : "nao-primo";

        echo "<div class='text-center mt-4'>
                <p>O número <span class='numero-box'>$numero</span> 
                <span class='numero-box'>é</span> um número 
                <span class='numero-box $classePrimo'>" . ($primo ? "PRIMO" : "NÃO PRIMO") . "</span>.</p>

                <p>Além disso, ele é um número 
                <span class='numero-box primo'>$paridade</span>.</p>
              </div>";
    }
    ?>

    <a href="http://localhost/Menu/index.php">Menu Principal</a>
</body>
</html>
