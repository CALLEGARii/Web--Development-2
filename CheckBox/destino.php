<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['interesses'])) {
    $interesses = $_POST['interesses'];
    sort($interesses);
} else {
    $interesses = [];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            margin-top: 1vh;
        }
        pre {
            background: #f8f8f8;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;        
        }
    </style> 
</head>
<body class = "container">
    <h1>Destino</h1>
    <hr>
    <h2>Dados da requisição:</h2>
    <pre><?php var_dump($interesses); ?></pre>
    
    <h2>Interesses selecionados (em ordem alfabética)</h2>
    <ul>
        <?php for ($i = 0; $i < min(3, count($interesses)); $i++): ?>
            <li><?= htmlspecialchars($interesses[$i]) ?></li>
        <?php endfor; ?>
        <?php if (count($interesses) > 3): ?>
            <li>...</li>
        <?php endif; ?>
    </ul>
    <a href="index.php">Voltar para o formulário</a>
</body>
</html>