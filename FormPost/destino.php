<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Destino</h1>
    <hr>

    <div>
    <?php
    $titulopagina = filter_input(INPUT_POST, "titulopagina", FILTER_SANITIZE_SPECIAL_CHARS);
    $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor = filter_input(INPUT_POST, "cortext", FILTER_SANITIZE_SPECIAL_CHARS);
    $urlImg= filter_input(INPUT_POST, "urlImg", FILTER_SANITIZE_URL);
    $urllink = filter_input(INPUT_POST, "urllink", FILTER_SANITIZE_URL);
    $corplanofundo = filter_input(INPUT_POST, "corfundo", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>$titulopagina<br> $corpo <br> </p>"
    

    ?>

    <style>

        body{
            background-color: <?php echo $corplanofundo?>;
            color: <?php echo $cor?>;

        }
    </style>

    <img src="<?php echo $urlImg?>">
    <br>
    <br>
    <a href="<?php echo $urllink?>">https://vtp.ifsp.edu.br/</a>


</div>
    
</body>
</html>