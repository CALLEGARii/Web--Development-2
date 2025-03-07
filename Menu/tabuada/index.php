<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
body {
    font-size: large;
    font-weight: bold;
}
</style>

<body class="container">

    <h1>Tabuada</h1>
    <hr>

    <form action="http://localhost/Menu/tabuada/index.php" method="get">
        <label id="number" for="numero">Número</label>
        <input name="numero" type="number" class="w-5">
        <div class="button-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </form>
    <br>
    <?php
    $numero = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_SPECIAL_CHARS);
    
    if (isset($numero) && is_numeric($numero)) {
        echo "<h2>Tabuada do $numero:</h2>";
        echo "<ul>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
    }
?>
<a href="http://localhost/Menu/index.php">Menu Principal</a>
</body>
</html>