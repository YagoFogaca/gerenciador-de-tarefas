<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('./assets/style/index.css') }}>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #00abb3!important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src={{ asset('./assets/img/logo.png') }} alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create-task">Criar</a>
                    </li>
                    <li class="nav-item" style="display: flex; align-items: center;">
                        <a class="btn btn-danger btn-sm" href="/delete-task">Resetar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
    </main>
    {{-- <script src="./assets/js/carousel.js"></script> --}}
    <script src="https://kit.fontawesome.com/6a854b9b2a.js" crossorigin="anonymous"></script>
</body>

</html>
