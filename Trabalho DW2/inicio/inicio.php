<?php
session_start();
require '../componentes/header.php';
?>

<style>
    .container-content {
        max-width: 900px;
        margin: 0 auto;
        background: #181a1b;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .img-lorem {
        width: 250px;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .img-lorem {
            display: block;
            margin: 20px auto;
            float: none;
        }
    }
</style>

<div class="container mt-4">
    <div class="container-content">
        <h1 class="text-center">Página Inicial</h1>
        <br>

        <img class="img-lorem img-thumbnail m-4 rounded float-end" src="img/pngwing.com.png" alt="Lorem Ipsum">

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet egestas sapien. Fusce porttitor
            tellus vel eleifend dictum. Aenean sed neque sit amet risus eleifend pulvinar. Aliquam erat volutpat. Duis
            tempor non risus sit amet accumsan. Ut eget nisl ipsum. Morbi ultrices nec mi vitae maximus. Morbi nec
            ornare justo. Pellentesque aliquam ex eget purus tempor sodales. In imperdiet sem nibh, eget faucibus tortor
            aliquam eget.
        </p>
        <p>
            Quisque imperdiet purus vel felis vulputate, quis sollicitudin enim volutpat. Curabitur elementum urna
            dolor. Nulla suscipit leo sit amet erat egestas commodo. Ut accumsan turpis eu justo placerat, vitae
            consequat ipsum suscipit. Nunc et fringilla nunc. Nullam ut lobortis nulla. Cras euismod turpis posuere
            sapien ornare, nec lobortis libero rhoncus. Phasellus mauris lorem, eleifend eget tincidunt quis, varius eu
            est. Fusce metus risus, lobortis eget justo nec, condimentum ullamcorper augue. Phasellus sollicitudin
            magna non euismod elementum. Proin sodales venenatis vulputate. Cras a turpis lacus. Aliquam sit amet
            maximus magna. Integer nec nibh ipsum. Etiam quis lacus at nisi scelerisque mattis sit amet et elit. Donec
            vulputate dignissim nunc id euismod.
        </p>

        <?php
        if (isset($_SESSION['erro']) && !empty($_SESSION['erro'])) {
        ?>
        <div class="alert alert-warning text-center" role="alert">
            <?php echo $_SESSION['erro']; ?>
        </div>
        <?php
        unset($_SESSION['erro']);
        }
        ?>
    </div>
</div>
<br>

<?php
require '../componentes/footer.php';
?>
