<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            margin-top: 1vh;
        }
    </style>
</head>
<body class="container">

    <h1>Contador</h1>
    <hr>

    <form action="resultado.php" method="get">
        <div class="form-label">
            <label for="inicio">Inicio</label>
            <input name="inicio" id="inicio" type="number" class="form-control" required>
        </div>
        <div class="form-label">
            <label for="final">Final</label>
            <input name="final" id="final" type="number" class="form-control" required>
        </div>
        <div class="form-label">
            <label for="incremento">Incremento</label>
            <input name="incremento" id="incremento" type="number" class="form-control" required>
        </div>
        <div class="button-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </form>
    
</body>
</html>
