<?php
session_start();

$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

$erro = "";

if ($user == "rafael") {
    if ($pass == "senha123") {
        $_SESSION["user"] = $user;
        header("Location: ../inicio/inicio.php");
        exit();
    } else {
        $erro = "Senha incorreta!";
    }
} else {
    $erro = "O <strong>usuário</strong> não foi encontrado.<br>Verifique as informações e tente novamente.";
}
?>

<?php require '../componentes/header.php'; ?>
<hr>
<div class="container mt-5">
        <h1 class="text-center">Autenticação</h1>
        <br>   
    <?php if (!empty($erro)): ?>
        <div class="alert alert-danger text-center" role="alert">
            <h4 class="alert-heading">Falha ao efetuar autenticação</h4>
            <p><?php echo $erro; ?></p>
            <hr>
            <p class="mb-0">Clique abaixo para tentar novamente.</p>
        </div>
    <?php endif; ?>

    <a href="login.php" class="btn btn-primary mt-3">Voltar</a>
</div>
<?php require '../componentes/footer.php'; ?>
<hr>
</body>
</html>
