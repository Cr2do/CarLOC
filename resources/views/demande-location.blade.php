@extends('layouts.master')

@section('main')
    <div class="col-12 mt-4">

        @if(($user=='') || ($voiture=='') || ($location =='') || ($modele==''))
            <div class="col-12 mt-5">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Aucune demande de location n'est en cours</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @else
            <table class="table table-striped table-hover text-center table-responsive-sm">
                <thead>
                <tr>
                    <th scope="col">Client</th>
                    <th scope="col">Voiture</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Valider</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $modele->name.' '.$modele->marque->name.' '.$voiture->immatriculation }}</td>
                    <td>{{ $location->statut }}</td>
                    <td>
                        <button type="button" class="btn" data-toggle="modal" data-target="#validate">
                            <i class="fa fa-check" style="color: green;" data-toggle="tooltip" title="Accepter la location" data-placement="top"></i>
                        </button>
                        <div class="modal fade" id="validate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="validateLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-success" id="staticBackdropLabel">Valider la location</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" action="{{ route('accepterLoc',['id'=>$location->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Confirmer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--                        Unchecked button--}}
                        <button type="button" class="btn" data-toggle="modal" data-target="#rejeter">
                            <i class="fa fa-times" style="color: red;" data-toggle="tooltip" title="Rejeter la location" data-placement="bottom"></i>
                        </button>
                        <div class="modal fade" id="rejeter" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="rejeterLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-danger" id="staticBackdropLabel">Rejet de la demande </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" action="{{ route('rejeterLoc',['id'=>$location->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Confirmer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        @endif
    </div>
@endsection



