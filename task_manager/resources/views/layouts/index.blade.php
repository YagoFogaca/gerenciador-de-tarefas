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
    <x-nav></x-nav>

    <main class="container">
        @yield('content')
    </main>

    <script src={{ asset('./assets/js/index.js') }}></script>
    <script src="https://kit.fontawesome.com/6a854b9b2a.js" crossorigin="anonymous"></script>
</body>

</html>
