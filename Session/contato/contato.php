<?php
    require_once 'header.php';
    ?>
<div class="inicio">
    <hr>
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Formulário para Contato</h1>
            </div>

        <div class="d-flex justify-content-center">
            <form action="destino.php" method="post" style="width: 50%;">
            <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required style="border: 1px solid #ccc;">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required style="border: 1px solid #ccc;">
            </div>
            <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required style="border: 1px solid #ccc;"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
            </form>
        </div>
    <hr>
<?php
    require_once 'footer.php';
    ?>