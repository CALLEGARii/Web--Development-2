<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 >Formulário de Cadastro</h1>
            <form action="destino.php" method="POST">
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="titulo" class="form-label">Título da Página:</label>
                    <input type="text" class="form-control" id="titulopagina" name="titulopagina">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="corpo" class="form-label">Corpo</label>
                        <textarea type="textarea" class="form-control" id="corpo" name="corpo"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cortexto" class="form-label">Cor texto</label>
                        <input type="color" class="form-control" id="cor" name="cortext">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="url" class="form-label">URL de uma Imagem:</label>
                        <input type="text" class="form-control" id="url" name="urlImg">

                <div class="row">
                    <div class="mb-3">
                        <label for="CEP" class="form-label">URL de link:</label>
                        <input type="text" class="form-control" id="urllink" name="urllink">
                <div class="row">
                <div class="mb-3">
                    <label for="endereco" class="form-label">Cor de plano de fundo da página</label>
                    <input type="color" class="form-control" id="corfundo" name="corfundo">
                    </div>

                    <br>

                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
