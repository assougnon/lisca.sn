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
                            <th scope="col">IdMed</th>
                            <th scope="col">image</th>
                            <th scope="col">Nom Médicament </th>
                            <th scope="col">Forme Galinique</th>
                            <th scope="col">Dosage</th>
                            <th scope="col">Prix unitaire</th>
                            <th scope="col">Qte en Stock</th>
                            <th scope="col">Prix Total</th>

                            <th scope="col">Seuil Min</th>

                            <th scope="col">Conditionnement</th>
                            <th scope="col">Provenance</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
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
                    <table class="table table-bordered mt-5">
                        <thead>
                        <tr>

                            <th scope="col">Produits en stock</th>
                            <th scope="col">Total prix</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>{{$nbrMedicament}}</td>
                            <th>{{$prixTotal}} Fr CFA</th>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection