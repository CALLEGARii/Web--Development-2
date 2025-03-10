<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

    body{
        margin-top: 1vh;
        font-size: large;
    }

    .form-control{
        border : 1px solid lightblue;
    }

    button{
        border : 1px solid lightblue;      
    }
</style>

</head>
<body class="container mt-4">

    <h2 class="text-center mb-4">Gerador de Tabela</h2>
    <form action="resultado.php" method="GET" class="row g-3 justify-content-center">
        <div class="col-auto">
            <label for="linhas" class="form-label">Número de Linhas:</label>
            <input type="number" class="form-control" id="linhas" name="linhas" min="1" required>
        </div>
        <div class="col-auto">
            <label for="colunas" class="form-label">Número de Colunas:</label>
            <input type="number" class="form-control" id="colunas" name="colunas" min="1" required>
        </div>
        <div class="col-auto">
            <label for="estilo" class="form-label">Escolha o Estilo:</label>
            <select class="form-select" id="estilo" name="estilo" required>
                <option value="table-primary">Azul (Primary)</option>
                <option value="table-success">Verde (Success)</option>
                <option value="table-danger">Vermelho (Danger)</option>
                <option value="table-warning">Amarelo (Warning)</option>
                <option value="table-info">Ciano (Info)</option>
                <option value="table-dark">Escuro (Dark)</option>
            </select>
        </div>
        <div class="col-auto align-self-end">
            <button type="submit" class="btn btn-primary">Gerar Tabela</button>
        </div>
    </form>

    <a href="http://localhost/Menu/index.php">Menu Principal</a>
</body>
</html>
