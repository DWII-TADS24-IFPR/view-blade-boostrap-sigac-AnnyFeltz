<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ url('/') }}">Home</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/alunos') }}">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cursos') }}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/turmas') }}">Turmas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nivels') }}">Níveis</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Mais
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('comprovantes.index') }}">Comprovantes</a></li>
                        <li><a class="dropdown-item" href="{{ route('declaracoes.index') }}">Declarações</a></li>
                        <li><a class="dropdown-item" href="{{ route('documentos.index') }}">Documentos</a></li>
                        <li><a class="dropdown-item" href="{{ route('categorias.index') }}">Categorias</a></li>
                    </ul>

                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

        </div>
    </div>
</nav>
