@extends('layouts._template')

@section('hero')
    <section id="top" class="">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-12 text-left m-0">
                    <h7 class="text-left text-white">
                        <span style="color: var(--CarLOC); font-size: 1.3rem">Location | <i class="fa fa-car"></i> {{ $car->modele->name }} ~ </span>{{ $car->immatriculation }}
                    </h7>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <div class="container bg-gray-800">
        <div class="row my-5">
            @if(Session('sorry'))
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ Session('sorry') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
                @if(Session('success'))
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            <div class="col-md-5">
                <img src="{{ asset($car->image) }}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-7 p-0 m-0">
                <div class="row col-12">
                    <div class="col-12">
                        <p class="text-center">
                            La voiture a loue est une perle parmis tant d'autres. Elle dispose d'un moteur d'une puissant de <b>{{ $car->puissance }}</b>. <br>
                            Elle dispose de {{ $car->places }} et est de {{ $car->daily_price }} par jour
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <form class="" action="{{ route('rentSecondProcess',['voiture' => $car->id]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="date_start">Date a le prendre</label>
                                <input type="date" id="date_end" class="form-control" name="date_start" >
                            </div>
                            <div class="form-group">
                                <label for="date_end">Date a rendre</label>
                                <input type="date" id="date_end" class="form-control" name="date_end">
                            </div>
                            <button type="submit" class="btn btn-info"> Louer {{ $car->modele->marque->name.' '.$car->modele->name }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
