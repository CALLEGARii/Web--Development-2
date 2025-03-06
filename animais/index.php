<?php
$animais = [
    'gato' => ['nome' => 'Gato', 'raca' => 'Siamês'],
    'cachorro' => ['nome' => 'Cachorro', 'raca' => 'Labrador'],
    'hamster' => ['nome' => 'Hamster', 'raca' => 'Sírio'],
    'lagartixa' => ['nome' => 'Lagartixa', 'raca' => 'Leopard Gecko']
];

$clicados = json_decode($_POST['clicados'] ?? '[]', true);
$ultimo_animal = json_decode($_POST['ultimo_animal'] ?? 'null', true);

if (!empty($_POST['animal']) && isset($animais[$_POST['animal']])) {
    $ultimo_animal = $animais[$_POST['animal']];
    $clicados[] = $ultimo_animal;
}

if (!empty($_POST['limpar'])) {
    $clicados = [];
    $ultimo_animal = null;
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
            border: 3px solid transparent; }

            .selecionado 
            { 
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
            display: <?= count($clicados) > 1 ? 'block' : 'none' ?>; }

            .botao-limpar {
             margin-top: 10px; 
            }
    </style>
</head>
<body>
    <h1>Praticando 3 - Animais</h1>
    <form method="post">
        <input type="hidden" name="clicados" value='<?= json_encode($clicados) ?>'>
        <input type="hidden" name="ultimo_animal" value='<?= json_encode($ultimo_animal) ?>'>
        <div>
            <?php foreach ($animais as $key => $animal): ?>
                <button type="submit" name="animal" value="<?= $key ?>" style="border: none; background: none;">
                    <img src="img/<?= $key ?>.jpg" alt="<?= $animal['nome'] ?>" class="img-thumbnail <?= ($_POST['animal'] ?? '') === $key ? 'selecionado' : '' ?>">
                </button>
            <?php endforeach; ?>
        </div>
    </form>
    <div id="descricao">
        <?php if ($ultimo_animal): ?>
            Nome: <?= $ultimo_animal['nome'] ?> <br>
            Raça: <?= $ultimo_animal['raca'] ?>
        <?php endif; ?>
    </div>
    <?php if (count($clicados) > 1): ?>
        <div id="animais-visitados">
            <strong>Últimos clicados:</strong> <br>
            <?php foreach (array_slice($clicados, 0, -1) as $animal): ?>
                <?= $animal['nome'] ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form method="post">
        <button type="submit" name="limpar" value="1" class="btn btn-danger botao-limpar">Limpar Tudo</button>
    </form>
</body>
</html>
