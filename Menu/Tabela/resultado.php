<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Gerada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="text-center mb-4">Tabela Gerada</h2>
    <a href="index.php" class="btn btn-secondary mb-3">Voltar</a>

    <?php
    if (isset($_GET['linhas']) && isset($_GET['colunas']) && isset($_GET['estilo'])) {
        $linhas = intval($_GET['linhas']);
        $colunas = intval($_GET['colunas']);
        $estilo = htmlspecialchars($_GET['estilo']); // Evita XSS

        echo "<div class='table-responsive'>";
        echo "<table class='table $estilo table-bordered text-center'>";
        
        for ($i = 1; $i <= $linhas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $colunas; $j++) {
                echo "<td>-</td>"; // Exibe apenas um traço no lugar dos números
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "<p class='text-danger'>Erro: Parâmetros ausentes!</p>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
