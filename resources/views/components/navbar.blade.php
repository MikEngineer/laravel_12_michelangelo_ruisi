<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tag.create')}}">Crea Tag</a>
                </li>
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, ospite!
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{route('login')}}">Accedi</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{route('register')}}">Registrati</a>
                            </li>
                        </ul>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <button class="dropdown-item">
                                        Logout
                                    </button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{route('article.create')}}">Crea articolo</a>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>