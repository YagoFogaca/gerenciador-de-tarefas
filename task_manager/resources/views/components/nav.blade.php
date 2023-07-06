<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #00abb3!important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src={{ asset('./assets/img/logo.png') }} alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create-task">Criar</a>
                </li>
                <li class="nav-item" style="display: flex; align-items: center;">
                    <a class="btn btn-danger btn-sm" href={{ route('reset') }}>Resetar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
