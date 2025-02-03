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
                    <a class="nav-link" href="{{route('products.index')}}">Prodotti</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Registrati</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button class="nav-link">
                                Logout
                            </button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Benvenutə {{Auth::user()->name}}</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>