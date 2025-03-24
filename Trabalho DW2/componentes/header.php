<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            color: white;
            background-color: #202424;
        }

        .inicio p {
            text-align: justify;
            text-indent: 3.5em;
        }

        /* Estilização para deixar o header e o footer mais elegantes */
        .custom-header, .custom-footer {
            background: #181a1b;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Melhorando a navegação */
        .navbar {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Ajustando os ícones do footer */
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            transition: transform 0.3s ease-in-out;
        }

        .social-icons a:hover {
            transform: scale(1.2);
        }

        .navbar-brand{
            border-bottom: white;
        }

        
    </style>
</head>

<body>

        <!-- Navbar Responsiva -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow container-fluid bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand fw-bold ms-5" href="/">Site Muito Foda</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <?php include '../componentes/menu.php'; ?>
        </div>
    </div>
</nav>


    </div>