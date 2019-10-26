@extends('dashbord')

@section('content')

        <div class="card shadow mb-12">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des médicaments </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-dark" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                        <tr>

                            <th>Nom Hopital </th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach(  $hopitaux as $hospi)
                            <tr>

                                <td>{{$hospi->nom_hopital}}</td>
                                <td>{{$hospi->telephone_hopital}}</td>
                                <td>{{$hospi->adresse_hopital}}</td>

                                <td>
                                    <a href="hopitaux/{{$hospi->id}}/edit" class="btn btn-warning ">
                                        <span class="text">Modifier</span>
                                    </a>
                                </td>
                                <td>
                                    <form action="/hopitaux/{{$hospi->id}}" method="post" id="{{$hospi->id}}" >
                                        @method('DELETE')
                                        <button href="" class="btn btn-danger confirmationB" id="{{$hospi->id}}" name="{{$hospi->nom_hopital}}">
                                            supprimer
                                        </button>

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

@endsection