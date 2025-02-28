<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="form-container">
            <br>
            <h1>Calculator</h1>
            <hr>

            <form action="destino.php" method="POST">
                <div class="row mb-2">
                    <label for="inputEmail3" class="col-sm-1 col-form-label">Nota 1</label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="nota1" name= "nota1">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="inputPassword3" class="col-sm-1 col-form-label">Nota 2</label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="nota2" name= "nota2">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="inputPassword3" class="col-sm-1 col-form-label">Nota 3</label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="nota3" name= "nota3">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success">Calcular</button>
                    <button type="button" class="btn btn-warning">Limpar</button>
                </div>
            </form>

            <style>
            button {
                margin: 5px;
            }
            </style>

</body>

</html>