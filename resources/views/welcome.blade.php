@extends('layouts._template')

@section('link')
    <link href="{{ 'carloc/caroussel/carou.css' }}" rel="stylesheet">
@endsection

@section('hero')
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1>CarLOC, reference en location de voitures</h1>
                    <h2>Nous vous louons des voitures a des prix qui defient toute concurence</h2>
                    <a href=" {{ route('cars') }}" class="btn-get-started scrollto">Louer une voiture</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <div class="container">

        <div class="col-12 pt-4">
            <h4 style="color: var(--CarLOC)" class="text-center">Les marques dont nous disposons</h4>
        </div>

        <div class="row">
            <div class="col-12 text-center p-4">
                <div class="row d-flex justify-content-around">
                    @foreach($marques as $marque)
                        <div class="card col-3 bg-transparent border-0 text-white pr-2">
                            <img src="{{ asset($marque->logo) }}" class="card-img" alt="...">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 py-2">
                <h4 style="color: var(--CarLOC)" class="text-center"> Quelques modeles de voitures </h4>
            </div>

            <div class="container text-center my-3">
                <div class="row mx-auto my-auto">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            @foreach($voitures as $voiture)
                                <div class="carousel-item
                                    @if($voiture->id == 1)
                                        {{ $active }}
                                    @endif ">
                                    <div class="col-md-4">
                                        <div class="h-50">
                                            <img class="img-fluid rounded" src="{{ $voiture->image }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ 'carloc/caroussel/carouJS.js' }}"></script>
@endsection
