<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <title>CarLOC | Admin </title>

    <link href="{{ asset('admin/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            .nav-item{
                padding: 10px 0;
            }
        }
        .nohove:hover{
            background-color: transparent;
        }
    </style>
    <link href="{{ asset('admin/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand text-center col-md-3 col-lg-2 mr-0 px-3" href="/">
        <span style="font-size: 1.8rem">CarLOC<span style="color: #ff7700; font-size: 1.7rem">.</span></span>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="">
        <input class="form-control form-control-dark rounded w-100" type="text" placeholder="Search" aria-label="Search">
    </form>
    <ul class="navbar-nav px-4">
        <li class="nav-item text-nowrap">
            <a class="dropdown-item text-white nohove" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>&nbsp Deconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</nav>

    <div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="fa fa-home" style="color: rgba(241, 162, 14, 0.925)"></i>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('demandeLocation') }}">
                            <i class="fa fa-user" style="color: rgba(241, 162, 14, 0.925)"></i>
                            Demandes de location
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-cog" style="color: rgba(241, 162, 14, 0.925)"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="row>">
                <div class="p-3 mb-4 border-bottom">
                    <h1 class="h2" style="color: rgba(241, 162, 14, 0.925);">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                @yield('main')
            </div>
        </main>
    </div>
</div>

<!-- Scripts file -->
{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
    <script src="{{ asset('bootstrap/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/popper.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="{{ asset('admin/assets/dist/js/bootstrap.bundle.min.js') }}"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>--}}
    <script src="{{ asset('admin/dashboard.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
</html>

