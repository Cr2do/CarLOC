@extends('layouts.master')

@section('main')
    <div class="col-12 mt-3">
        <div class="d-flex justify-content-around">
            <p class="h3 text-center listeV"> Liste des voitures disponibles </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#creation">
                Ajouter +
            </button>
            <div class="modal fade" id="creation" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="creationLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="staticBackdropLabel">Ajouter une voiture</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="pb-4" action="{{ route('voitures.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    @if($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            @foreach($errors->all() as $error)
                                                <strong>{{ $error }}</strong>
                                            @endforeach
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                <div class="form-group">
                                    <label for="immatriculation" class="text-center h5">Immatriculation de la voiture</label>
                                    <input type="text" class="form-control"  id="immatriculation" name="immatriculation">
                                </div>
                                <div class="form-group">
                                    <label for="image" class="text-center h5">Immatriculation de la voiture</label>
                                    <input type="file" class="form-control"  id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="puissance" class="text-center h5">Puissance</label>
                                    <input type="number" class="form-control" name="puissance" id="puissance" >
                                </div>
                                <div class="form-group">
                                    <label for="etat" class="text-center h5">Etat de la voiture</label>
                                    <input type="text" class="form-control" id="etat" name="etat">
                                </div>
                                <div class="form-group">
                                    <label for="poids_vide" class="text-center h5">Poids a vide de la voiture</label>
                                    <input type="number" class="form-control" name="poids_vide" id="poids">
                                </div>
                                <div class="form-group">
                                    <label for="places" class="text-center h5">Place</label>
                                    <input type="number" class="form-control" name="places" id="places" required>
                                </div>
                                <div class="form-group">
                                    <label for="daily_price" class="text-center h5">Prix de location journalier</label>
                                    <input type="number" class="form-control" name="daily_price" id="daily_price" required>
                                </div>
                                <div class="form-group">
                                    <label for="modele" class="text-center h5">Modele</label>
                                    <select id="modele" name="modele" class="form-control" required>
                                        <option selected> -- </option>
                                        @foreach($marques as $marque)
                                            <optgroup label="{{ $marque->name }}"></optgroup>
                                            @foreach($marque->modeles as $mod)
                                                <option> {{ $mod->name }} </option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <table class="table table-striped table-hover text-center table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Voiture</th>
                    <th scope="col">Immatriculation</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Puissance</th>
                    <th scope="col">Nombre de Place</th>
                    <th scope="col">Modele</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Prix Journalier</th>
                    <th scope="col">Opérations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($voitures as $voiture)
                    <tr class="lineHeight">
                        <td scope="row">{{ $compte++ }}</td>
                        <td>{{ $voiture->immatriculation }}</td>
                        <td>{{ $voiture->etat }}</td>
                        <td>{{ $voiture->puissance }}</td>
                        <td>{{ $voiture->places }}</td>
                        <td>{{ $voiture->modele->name }}</td>
                        <td>{{ $voiture->modele->marque->name }}</td>
                        <td>{{ $voiture->daily_price }}</td>
                        <td>

                    {{--   Afficher une voiture                   --}}
                            <button type="button" class="btn" data-toggle="modal" data-target="#showCar{{$voiture->id}}">
                                <i class="fa fa-eye text-info" data-toggle="tooltip" title="Aperçu de l'élément" data-placement="top"></i>
                            </button>
                            <div class="modal fade" id="showCar{{$voiture->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="showCarLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Details</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ $voiture->image }}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    {{--       Modifier  une voiture              --}}
                            <button type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop{{$voiture->id}}">
                                <i class="fa fa-pencil-alt" data-toggle="tooltip" title="Modifier l'élément" data-placement="bottom"></i>
                            </button>
                            <div class="modal fade" id="staticBackdrop{{$voiture->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Modification des voitures</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="pb-4" action="{{ route('voitures.update',['voiture'=> $voiture->id]) }}" method="POST">
                                                @csrf
                                                {{ method_field('PUT') }}
                                                <div class="form-group">
                                                    <label for="immatriculation" class="text-center h5">Immatriculation</label>
                                                    <input type="text" class="form-control"  id="immatriculation" name="immatriculation" value="{{ $voiture->immatriculation }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="puissance" class="text-center h5">Puissance</label>
                                                    <input type="number" class="form-control" name="puissance" id="puissance" value="{{ $voiture->puissance }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="etat" class="text-center h5">Etat de la voiture</label>
                                                    <input type="text" class="form-control" id="etat" name="etat" value="{{ $voiture->etat }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="poids" class="text-center h5">Poids a vide de la voiture</label>
                                                    <input type="number" class="form-control" name="poids" id="poids" value="{{ $voiture->poids_vide }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="place" class="text-center h5">Place</label>
                                                    <input type="number" class="form-control" name="places" id="place" value="{{ $voiture->places }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="prixJ" class="text-center h5">Prix de location journalier</label>
                                                    <input type="number" class="form-control" name="daily_price" id="prixJ" value="{{ $voiture->daily_price }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    {{--     Supprimer une voiture                  --}}
                            <button type="button" class="btn" data-toggle="modal" data-target="#deletedCar{{$voiture->id}}">
                                <i class="fa fa-trash-alt text-danger" data-toggle="tooltip" title="Supprimer l'élément" data-placement="top"></i>
                            </button>
                            <div class="modal fade" id="deletedCar{{$voiture->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deletedCarLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-danger" id="staticBackdropLabel">Confirmer la suppression</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="" action="{{ route('voitures.destroy', ['voiture'=> $voiture->id]) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Confirmer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection



