<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CarLOC. - Home</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('carloc/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('carloc/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('carloc/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('carloc/style.css') }}" rel="stylesheet">
    @yield('link')
</head>

<body  class="gris">
<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="/">CarLOC<span>.</span></a></h1>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="/">Accueil</a></li>
                        <li><a href="/">Marques disponibles</a></li>
                        <li><a href="/">A propos</a></li>
                        <li><a href="/">Contacts</a></li>
                        @auth
                            <li>
                                <a href="{{ url('/dashboard') }}" class="get-started-btn px-2">Dashboard</a>
                            </li>
                        @else
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">S'enregistrer</a>
                                </li>
                            @endif
                                <li>
                                    <a href="{{ route('login') }}" class="get-started-btn scrollto px-2"> Se connecter</a>
                                </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</header>
        @yield('hero')
        <main>
            @yield('main')
        </main>

        <footer id="footer">
            <div class="container py-4">
                <div class="row" id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 style="color: var(--CarLOC)"> A propos</h2>
                            </div>
                            <div class="col-12">
                                <p style="">
                                    Bienvenue sur CarLOC. Vous y trouverez chaque jour plus de 1,4 million de v??hicules en provenance de toute l???Europe et 30 000 de France. Voitures neuves et d???occasion, petites cylindr??es, voitures de collection, limousines de luxe ou bonnes affaires : quel que soit le type de v??hicule recherch??, vous le trouverez sur CarLOC.

                                    CarLOC. fait partie de mobile.de, le plus grand portail automobile allemand qui facilite l???achat d???un v??hicule. Par une simple recherche et en quelques clics, vous pourrez obtenir un aper??u de l???ensemble du march?? automobile. Vous pourrez facilement comparer et prendre une d??cision, mais aussi contacter des vendeurs de voitures neuves et d???occasion, gratuitement, ais??ment et sans soucis.

                                    Vous souhaitez acheter une voiture d???occasion, une moto, un utilitaire ou un camping car ? Sur automobile.fr, vous trouverez des offres de professionnels et de particuliers adapt??es ?? vos besoins. Elles peuvent m??me ??tre assorties d???une garantie v??hicule d???occasion, si n??cessaire.

                                    Ou peut-??tre recherchez-vous une voiture neuve ? Alors, vous ??tes au bon endroit. Des v??hicules flambant neufs, des voitures CE neuves, des voitures avec immatriculations pour une journ??e et des voitures de soci??t?? parfaitement entretenues provenant d???Allemagne et de toute l???Union europ??enne. Le tout clairement d??taill?? et offrant un vaste choix.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4">
                <div class="row" id="contact">
                    <div class="col-12 text-center">
                        <h4 style="color: var(--CarLOC)">Nous contacter</h4>
                    </div>
                    <div class="col-12 row">
                        <div class="col-6 ">
                           <p class="text-center d-block">
                               Car Loc est une socet de plus de 15 ans d'expertise. <br> Nous some situe a
                               C\12378 Cotonou Akpakpa
                           </p>
                        </div>
                        <div class="col-6">
                            <input type="email" required class="form-control" placeholder="Notre newsletter">
                            <button class="btn btn-block btn-secondary my-1"> Soumettre </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4">
                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright text-center">
                        &copy; Copyright <strong><span>CarLOC</span></strong>. Realis?? par <b>Cr??do AYIVI & KPADE Innocent</b>
                    </div>
                </div>
            </div>
        </footer>

{{--        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>--}}

        <script src="{{ asset('bootstrap/jquery.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('carloc/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('carloc/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('carloc/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('carloc/aos/aos.js') }}"></script>
        <script src="{{ asset('carloc/main.js') }}"></script>
        @yield('script')

</body>

</html>
