<style>
    .sair{
        color: red;
    }
</style>

<?php
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="../inicio/inicio.php" class="nav-link">Início</a></li>
        <li class="nav-item"><a href="../sobre/sobre.php" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="../faqs/faqs.php" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="../contato/contato.php" class="nav-link">Contato</a></li>
        <li class="nav-item"><a href="../perfil/perfil.php" class="nav-link">Perfil</a></li>
        <li class="nav-item"><a href="../login/sair.php" class="nav-link"><span class = "sair">Sair</span></a></li>
    </ul>
<?php } else { ?>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="../inicio/inicio.php" class="nav-link">Início</a></li>
        <li class="nav-item"><a href="../sobre/sobre.php" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="../faqs/faqs.php" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="../contato/contato.php" class="nav-link">Contato</a></li>
        <li class="nav-item"><a href="../login/login.php" class="nav-link active">Entrar</a></li>
    </ul>
<?php } ?>
