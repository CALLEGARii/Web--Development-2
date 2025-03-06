<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Interesses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            margin-top: 1vh;
        }
    </style>

</head>

<body class = "container">
    <h1>Selecione seus interesses</h1>
    <hr>
    <form method="post" action="destino.php">
        <label><input type="checkbox" name="interesses[]" value="Esportes"> Esportes</label><br>
        <label><input type="checkbox" name="interesses[]" value="Futebol"> Futebol</label><br>
        <label><input type="checkbox" name="interesses[]" value="Tênis"> Tênis</label><br>
        <label><input type="checkbox" name="interesses[]" value="Basquete"> Basquete</label><br>
        <label><input type="checkbox" name="interesses[]" value="Eletrônicos"> Eletrônicos</label><br>
        <label><input type="checkbox" name="interesses[]" value="Smartphones"> Smartphones</label><br>
        <label><input type="checkbox" name="interesses[]" value="Desktop gamers"> Desktop gamers</label><br>
        <label><input type="checkbox" name="interesses[]" value="Notebooks"> Notebooks</label><br>
        <button class="btn btn-primary mt-3" type="submit">Enviar</button>
    </form>
</body>
</html>
