@extends('dashbord')

@section('content')
    <div class="d-xl-flex align-items-center justify-content-between mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des médicaments </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                        <tr>
                            <th>IdMed</th>
                            <th>image</th>
                            <th>Nom Médicament </th>
                            <th>Forme Galinique</th>
                            <th>Dosage</th>
                            <th>Prix unitaire</th>
                            <th>Qte en Stock</th>
                            <th>Prix Total</th>

                            <th>Seuil Min</th>

                            <th>Conditionnement</th>
                            <th>Provenance</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach(  $idMedicament as $medica)
                            <tr>
                                <td>{{$medica->id}}</td>
                                <td><img src="storage/{{$medica->imageMedicament}}" width="30" height="30" alt=""></td>
                                <td>{{$medica->nomMedicament}}</td>
                                <td>{{$medica->formeGalinique}}</td>
                                <td>{{$medica->dosageMedicament}}</td>
                                <td>{{$medica->prixMedicament}}</td>
                                <td>{{$medica->quantiteStockMed}}</td>
                                <td>{{$medica->totalPrix()}}</td>
                                <td>{{$medica->seuilMinMed}}</td>
                                <td>{{$medica->conditionnement}}</td>
                                <td>{{$medica->provenanceMed}}</td>

                                <td>
                                    <a href="malades/edit" class="btn btn-warning ">
                                        <span class="text">Modifier</span>
                                    </a>
                                </td>
                                <td>
                                    <form action="medicaments/{{$medica->id}}" method="post" id="formSuppression">
                                        @method('DELETE')
                                        <a href="" class="btn btn-danger confirmationB" >
                                            supprimer
                                        </a>

                                        @csrf
                                    </form>
                                </td>
                            </tr>
                      @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection