<?php
    session_start();
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        $_SESSION["erro"] = "Usuário já está autenticado!";
        header('Location: ../inicio/inicio.php');
    }
    require '../componentes/header.php';
    ?>

    <style>
        button{
            margin-right: 15px;
            
        }
    </style>
  
<div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Autenticação</h1>

            </div class = "text">
            
            <div>
            <div class="d-flex justify-content-center">
            <form action="destino-login.php" method="post" style="width: 25vh;">
            <div class="mb-3 row-2 col-15">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="user" name="user" required style="border: 1px solid #ccc;">
            </div>
            <div class="mb-3 row-2 col-15">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="pass" name="pass" required style="border: 1px solid #ccc;">
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
            </form>
            </div>
        </div>

<?php
    require '../componentes/footer.php';
    ?>