@extends('layouts.app1')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des Protocoles </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0" >
                    <thead>
                    <tr>
                        <th>Nom Protocole</th>
                        <th>Description</th>
                       
                      
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(  $protocoles as $proto)
                        <tr>
                          
                            <td>{{$proto->nomProtocol}}</td>
                            <td>{{$proto->descriptionProtocole}}</td>

                            <td>
                                <a href="protocoles/edit" class="btn btn-warning ">
                                    <span class="text">Modifier</span>
                                </a>
                            </td>
                            <td>
                                <form action="/protocoles/{{$proto->id}}" method="post" id="{{$proto->id}}" >
                                    @method('DELETE')
                                    <button href="" class="btn btn-danger confirmationB" id="{{$proto->id}}" name="{{$proto->prenom}}">
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