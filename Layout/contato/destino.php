<?php
require_once 'header.php';
?>

<div class="inicio">
    <hr>
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para Contato</h1>
    </div>

    <div class="container">
        <div class="card shadow-lg p-4 mb-5 bg-white rounded">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = htmlspecialchars($_POST['nome']);
                $email = htmlspecialchars($_POST['email']);
                $mensagem = htmlspecialchars($_POST['mensagem']);
                $dataHora = date("d/m/Y H:i:s");

                if (!is_dir("contatos")) {
                    mkdir("contatos", 0777, true);
                }

                $arquivo = fopen("contatos/" . time() . "_contato.txt", "w");
                fwrite($arquivo, "Nome: $nome\n");
                fwrite($arquivo, "Email: $email\n");
                fwrite($arquivo, "Data e Hora: $dataHora\n");
                fwrite($arquivo, "Mensagem: $mensagem\n");
                fclose($arquivo);
            ?>
                <h3 class="text-center text-success">Dados enviados com sucesso!</h3>
                <div class="mt-4">
                    <p><strong>Nome:</strong> <?= $nome ?></p>
                    <p><strong>Email:</strong> <?= $email ?></p>
                    <p><strong>Data e Hora:</strong> <?= $dataHora ?></p>
                    <p><strong>Mensagem:</strong> <?= nl2br($mensagem) ?></p>
                </div>
                <div class="text-center mt-4">
                    <a href="contato.php" class="btn btn-primary">Voltar</a>
                </div>
            <?php
            } else {
                echo '<p class="text-danger text-center">Nenhum dado foi enviado.</p>';
            }
            ?>
        </div>
    </div>
</div>
<hr>
<?php
require_once 'footer.php';
?>
