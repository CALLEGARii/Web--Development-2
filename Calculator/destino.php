<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <h1>Média Calculada</h1>
   
    <?php
    $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);
    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    echo "<p> Média do Aluno = $media<p>";

    if($media >= 6){
        $condicao = "Aprovado";
        $cor = 'text-success';

    }elseif($media == 5){
        $condicao = "Recuperação";
        $cor = 'text-warning';
    }else{
        $condicao = "Reprovado";
        $cor = 'text-danger';
    }

    echo "O aluno está <span class = '$cor'>$condicao</span>";
    ?> 
    <hr>


    </div>

    
    
</body>

</html>