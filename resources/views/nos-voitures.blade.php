@extends('layouts._template')

@section('hero')
    <section id="top" class="">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-12 text-left">
                    <h7 class="text-left text-white">Location / Voiture</h7>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <div class="container bg-gray-800">
        <div class="row mt-5">
            @if(Session('warning'))
                <div class="col-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ Session('warning') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            <div class="col-12">
                <div class="row d-flex justify-content-around">
                    @foreach($voitures as $voiture)
                        <div class="card p-0 col-md-3">
                            <img src="{{ $voiture->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $voiture->modele->marque->name.' '.$voiture->modele->name }}</h5>
                                <p class="card-text">
                                    La voiture ci presente est d'une puissance de {{ $voiture->puissance }}.Elle est dotee de {{ $voiture->places }} places. Et est louée a <br><b class="p-1 bg-success">{{ $voiture->daily_price }} FCFA</b> son prix journalier
                                </p>
                                <a href="{{ route('rentFirstProcess', ['voiture'=>$voiture->id]) }}" class="btn btn-info">Proceder a la location</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pt-3 col-12 text-center d-flex justify-content-around">
                    {{ $voitures->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
