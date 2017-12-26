<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 17px">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="icon-home"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="{{ url('/') }}" id="link-menu">Principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{ url('/quemsomos') }}" id="link-menu"><span class="icon-pricetags"></span> Quem Somos</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#" id="link-menu"><span class="icon-ribbon"></span> Nosso Método</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{ url('/cursos') }}" id="link-menu"><span class="icon-beaker"></span> Cursos</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-basket2"></span> Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($CategoriaModels as $categoria)
                        <a class="dropdown-item" href="{{ url('/categoria') }}/{{ $categoria->page }}"><span class="icon-bookmark"></span> {{ $categoria->categoria }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="link-menu"><span class="icon-envelope2"></span> Contatos</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar Curso" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Ok</button>
            </form>
        </div>
    </div>
</nav>