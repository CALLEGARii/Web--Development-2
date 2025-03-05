<?php
$animais = [
    'gato' => ['nome' => 'Gato', 'raca' => 'Siamês'],
    'cachorro' => ['nome' => 'Cachorro', 'raca' => 'Labrador'],
    'hamster' => ['nome' => 'Hamster', 'raca' => 'Sírio'],
    'lagartixa' => ['nome' => 'Lagartixa', 'raca' => 'Leopard Gecko']
];

session_start();
if (!isset($_SESSION['clicados'])) {
    $_SESSION['clicados'] = [];
}

if (isset($_GET['animal']) && isset($animais[$_GET['animal']])) {
    $animalSelecionado = $animais[$_GET['animal']];
    $_SESSION['clicados'][] = $animalSelecionado;
    $_SESSION['ultimo_animal'] = $animalSelecionado;
} else {
    $animalSelecionado = $_SESSION['ultimo_animal'] ?? null;
}

if (isset($_GET['limpar'])) {
    $_SESSION['clicados'] = [];
    unset($_SESSION['ultimo_animal']);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3 - Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 3vh 5vh;
        }
        .img-thumbnail {
            width: 400px;
            height: 200px;
            margin: 5px;
            cursor: pointer;
            border: 3px solid transparent;
        }
        .selecionado {
            border: 3px solid red;
        }
        #descricao {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        #animais-visitados {
            margin-top: 15px;
            background: white;
            padding: 10px;
            border: 1px solid black;
            max-width: 300px;
            display: <?= count($_SESSION['clicados']) > 1 ? 'block' : 'none' ?>;
        }
        .botao-limpar {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Praticando 3 - Animais</h1>
    <div>
        <?php foreach ($animais as $key => $animal): ?>
            <a href="?animal=<?= $key ?>">
                <img src="img/<?= $key ?>.jpg" alt="<?= $animal['nome'] ?>" class="img-thumbnail <?= isset($_GET['animal']) && $_GET['animal'] == $key ? 'selecionado' : '' ?>">
            </a>
        <?php endforeach; ?>
    </div>
    
    <div id="descricao">
        <?php if ($animalSelecionado): ?>
            Nome: <?= $animalSelecionado['nome'] ?> <br>
            Raça: <?= $animalSelecionado['raca'] ?>
        
        <?php endif; ?>
    </div>
    
    <?php if (count($_SESSION['clicados']) > 1): ?>
        <div id="animais-visitados">
            <strong>últimos clicados:</strong> <br>
            <?php for ($i = 0; $i < count($_SESSION['clicados']) - 1; $i++): ?>
                <?= $_SESSION['clicados'][$i]['nome'] ?><br>
            <?php endfor; ?>
        </div>
    <?php endif; ?>
    
    <a href="?limpar=1" class="btn btn-danger botao-limpar">Limpar Tudo</a>
</body>
</html>