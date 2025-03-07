<?php
$inicio = isset($_GET['inicio']) ? (int)$_GET['inicio'] : 0;
$final = isset($_GET['final']) ? (int)$_GET['final'] : 0;
$incremento = isset($_GET['incremento']) ? (int)$_GET['incremento'] : 1; 

function gerarContador($inicio, $final, $incremento) {
    $contadorCrescente = [];
    $contadorDecrescente = [];

    if ($incremento == 0) {
        return ['crescente' => [], 'decrescente' => []];
    }
    if ($inicio < $final) {
        for ($i = $inicio; $i <= $final; $i += $incremento) {
            $contadorCrescente[] = $i;  
        }
    }
    if ($inicio > $final) {
        for ($i = $inicio; $i >= $final; $i -= $incremento) {
            $contadorDecrescente[] = $i; 
        }
    }
    return ['crescente' => $contadorCrescente, 'decrescente' => $contadorDecrescente];
}

$contadores = gerarContador($inicio, $final, $incremento);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Contador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        margin-top: 2vh;
    }
    </style>
</head>

<body class="container">
    <h1>Resultado do Contador</h1>
    <hr>

    <h3>Parâmetros:</h3>
    <p><strong>Início:</strong> <?php echo $inicio; ?></p>
    <p><strong>Final:</strong> <?php echo $final; ?></p>
    <p><strong>Incremento:</strong> <?php echo $incremento; ?></p>

    <?php if (!empty($contadores['crescente'])): ?>
    <h3>Contador em Ordem Crescente:</h3>
    <p><?php echo implode(", ", $contadores['crescente']); ?></p>
    <?php endif; ?>

    <?php if (!empty($contadores['decrescente'])): ?>
    <h3>Contador em Ordem Decrescente:</h3>
    <p><?php echo implode(", ", $contadores['decrescente']); ?></p>
    <?php endif; ?>

    <a class="btn btn-primary mt-3" href="http://localhost/Menu/contador/index.php">Voltar</a>
</body>

</html>