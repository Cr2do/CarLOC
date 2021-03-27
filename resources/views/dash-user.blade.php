@extends('layouts._template')

@section('hero')
    <section id="top" class="">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-12 text-left">
                    <h7 class="text-left text-white">CarLOC | Espace Membre</h7>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main')
    <div class="container bg-gray-800">
        <div class="row col-12">
            @if(($user=='') || ($voiture=='') || ($location ==''))
                <div class="col-12 mt-5">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Espace membre vide vous n'avez fait aucune demande de location</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @else
                <table class="table table-striped table-hover text-center table-responsive-sm">
                    <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Voiture</th>
                        <th scope="col">Statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <td>{{ $user->name }}</td>
                    <td>{{ $voiture->immatriculation }}</td>
                    <td>{{ $location->statut }}</td>
                    </tbody>
                </table>
            @endif

        </div>
    </div>
@endsection
