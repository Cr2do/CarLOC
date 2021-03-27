<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ 'bootstrap/css/bootstrap.min.css' }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

    <header class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand d-block w-25 text-center" href="#">
                    Car ~ Location
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse w-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Les Voitures </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                A Propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Contacts
                            </a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
    </header>
    <body>
        @yield('contenu')

        <script src="{{ 'bootstrap/jquery.js' }}"></script>
        <script src="{{ 'bootstrap/popper.js' }}"></script>
        <script src="{{ 'bootstrap/js/bootstrap.js' }}"></script>
        <script src="{{ 'bootstrap/js/bootstrap.bundle.js' }}"></script>
    </body>
</html>













