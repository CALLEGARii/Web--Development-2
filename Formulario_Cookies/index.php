<?php
function getCookieValue($name) {
    return isset($_COOKIE[$name]) ? htmlspecialchars($_COOKIE[$name]) : "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $value = $_POST['value'];

    setcookie($name, $value, time() + (86400 * 30), "/");
    echo "Cookie salvo: " . $name . " = " . $value;
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
    <style>
        .invalid { border: 2px solid red; background-color: #ffdddd; }
        .valid { border: 2px solid green; background-color: #ddffdd; }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Formulário de Cadastro</h1>
            <form id="cadastroForm">
                <div class="mb-6">
                    <label for="nomeCompleto" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="nomeCompleto" name="Nome Completo" required value="<?= getCookieValue('nomeCompleto'); ?>">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="fone" name="Telefone" required placeholder="(DD)XXXXX-XXXX" value="<?= getCookieValue('fone'); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="e-mail" required placeholder="Digite seu email" value="<?= getCookieValue('email'); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required placeholder="XXX.XXX.XXX-XX" value="<?= getCookieValue('cpf'); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dateNasc" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dateNasc" name="dataNasc" value="<?= getCookieValue('dateNasc'); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="CEP" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="CEP" name="cep" required placeholder="XX.XXX-XXX" value="<?= getCookieValue('CEP'); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="city" class="form-label">Cidade</label>
                        <select class="form-select" id="city" name="cidade" required>
                            <option value="">[Selecione]</option>
                            <option value="SP" <?= getCookieValue('city') == 'SP' ? 'selected' : ''; ?>>São Paulo</option>
                            <option value="MG" <?= getCookieValue('city') == 'MG' ? 'selected' : ''; ?>>Minas Gerais</option>
                            <option value="RJ" <?= getCookieValue('city') == 'RJ' ? 'selected' : ''; ?>>Rio de Janeiro</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" required placeholder="Rua, nº e bairro" value="<?= getCookieValue('endereco'); ?>">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fotoPerfil" class="form-label">Foto de perfil</label>
                        <input type="file" class="form-control" id="fotoPerfil" accept="image/*">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="contrato" class="form-label">Contrato assinado (em PDF)</label>
                        <input type="file" class="form-control" id="contrato" accept="application/pdf">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </form>
        </div>
        <div class="image-container">
            <img src="img/747094.png" alt="Ícone de formulário">
        </div>
    </div>
</body>
</html>
