<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if(!isset ($_SESSION['user']) && empty($_SESSION['user'])){
    $_SESSION["erro"] = "Você está tentando acessar conteúdo restrito. Faça login para continuar.";
    header('Location: ../inicio/inicio.php');
}
require '../componentes/header.php';
?>

<h1 class="text-center">Perfil</h1>
<br>

<div class="container">
    <div class="card p-4">
        <p>Nome: <b>Rafael Callegari</b></p>
        <p>E-mail: <b>callegari@gmail.com</b></p>
        <p>Telefone: <b>(17) 3426-6999</b></p>
        <p>Endereço: <b>Rua dos tralhas, nº 457</b></p>
        <p>Cidade: <b>Cardoso</b></p>
        <p>Estado: <b>São Paulo</b></p>
    </div>
</div>


<?php
require '../componentes/footer.php';
?>
