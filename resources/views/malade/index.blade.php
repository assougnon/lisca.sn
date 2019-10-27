@extends('layouts.app1')

@section('content')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste de tous les patients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-dark" id="dataTable" width="100%" cellspacing="0" >
                    <thead>
                    <tr>
                        <th>Num</th>
                        <th>Prénom </th>
                        <th>Nom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de suivi</th>
                        <th>CIN</th>

                        <th>Date-Créa</th>

                        <th>Consulter</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($malade as $mala)
                        <tr>
                            <td>{{$mala->id}}</td>
                            <td><a href="/malades/{{$mala->id}}">{{$mala->prenom}}</a></td>
                            <td>{{$mala->nom}}</td>
                            <td>{{$mala->laDate()}}</td>

                            <td>{{$mala->lieuSuivi}}</td>
                            <td>{{$mala->ninp}}</td>
                             <td>{{$mala->dateDeCréation()}}</td>

                            <td>
                                <a href="malades/{{$mala->id}}/edit" class="btn btn-warning ">
                                    <span class="text">Modifier</span>
                                </a>
                            </td>
                            <td>
                                <form action="/malades/{{$mala->id}}" method="post" id="{{$mala->id}}" >
                                    @method('DELETE')
                                    <button href="" class="btn btn-danger confirmationB" id="{{$mala->id}}" name="{{$mala->prenom}}">
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