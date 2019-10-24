@extends('dashbord')
@section('titrecontenu')
    Détail du patient
    @endsection
@section('content')

    <div class="row mb-3">
        <div class="col">

    <a href="{{url()->previous()}}" class="btn btn-light btn-icon-split">
                    <span class="icon text-gray-600">
                      <i class="fas fa-arrow-left"></i>
                    </span>
        <span class="text">Retour</span>
    </a>
    <a href="/malades/{{$maladeId->id}}/edit" class="btn btn-warning btn-icon-split float-right">
         <span class="icon text-gray-600">
                      <i class="fas fa-edit"></i>
         </span>
        <span class="text">Modifier</span>
    </a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">

            <h6 class="m-0 font-weight-bold text-primary">Détail  du patient : {{$maladeId->prenom.' '.$maladeId->nom}}  </h6>
           @if($maladeId->enquete == "NO")
            <h6 class="m-0 font-weight-bold

             text-danger
">Etat Enquête sociale : {{$maladeId->enquete}}  </h6>
               @else
                <h6 class="m-0 font-weight-bold

             text-success
">Etat Enquête sociale : {{$maladeId->enquete}}  </h6>
               @endif
            <h6 class="font-weight-bold text-primary "style="float: right">Date d'enregistrement le {{$maladeId->dateDeCréation()}}</h6>
        </a>

        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">

                <div class="row  " >
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2" style=" background-color: #f5f5f5;" >
                            <div class="card-body" >

                                <div class="row " >
                                    <div class="col-md-4 pl-4">

                                        <img src="{{asset('storage/'.$maladeId->image)}}" alt=""  class="img-thumbnail" >
                                    </div>
                                   <div class="col-md-8">

                                       <ul class="list-unstyled">

                                           <li>
                                               <strong class="h1">Prénom :</strong>
                                               <small class="text-muted h1 ml-2">{{$maladeId->prenom}}</small>
                                           </li>
                                           <li>
                                               <strong class="h1">Nom :</strong>
                                               <small class="text-muted h1 ml-2">{{$maladeId->nom}}</small>
                                           </li>
                                           <li>
                                               <strong class="h1">Date de naissance :</strong>
                                               <small class="text-muted h1 ml-2">{{$maladeId->laDate()}}</small>
                                           </li>
                                           <li>
                                               <strong class="h1">Age :</strong>
                                               <small class="text-muted h1 ml-2">{{$maladeId->ageMalade()}} ans</small>
                                           </li>
                                           <li>
                                               <strong class="h1">Sexe :</strong>
                                               <small class="text-muted h1 ml-2">{{$maladeId->sexe}}</small>
                                           </li>
                                           <li>
                                               <strong class="h1">Nationalité :</strong>
                                               <small class="text-muted h1 ml-2">{{$maladeId->nationalite}}</small>
                                           </li>

                                       </ul>

                                   </div>

                                </div>
                                <div class="row mt-5">
                                    <div class="col-xl-12 col-md-12 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2" style=" background-color: #f5f5f5;" >
                                            <div class="card-body" >
                                                <div class="row " >
                                                    <div class="col">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <strong class="h1">Satut du Malade :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->statutDuMalade()}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Ethnie :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->ethnie}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Religion :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->religion}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Age d'apparition de la maladie :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->age}} ans</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Lieu de Suivi :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->lieuSuivi}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Numéro de Suivi :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->numeroSuivi}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Numéro Tél 1 :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->numTel}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Numéro Tél 2 :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->numTel1}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Numéro CNI :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->ninp}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Adresse :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->adresse}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Personne à contacter en cas de besoin 1:</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->pccb1}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Personne à contacter en cas de besoin 2:</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->pccb2}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Profession :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->profession}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Niveau Intélectuel :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->niveauIntelec}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Habitat :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->habitat}}</small>
                                                            </li>
                                                            <li>
                                                                <strong class="h1">Statut Habitat :</strong>
                                                                <small class="text-muted h1 ml-2">{{$maladeId->statuthabitat}}</small>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




                {{--image du patient--}}

            </div>
        </div>
    </div>

@endsection