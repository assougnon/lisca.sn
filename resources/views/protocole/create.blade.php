@extends('dashbord')
@section('titrecontenu')
    Ajout d'un hopital
@endsection
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Enregistrement d'un hopital</h6>
        </div>
        <div class="card-body " >
            <form action="/hopitaux" method="post"  enctype="multipart/form-data">
                @include('hopital.hopitalForm')
                @csrf

                <button class="btn btn-success btn-icon-split btn-lg">  <span class="icon text-white-50">
                     <i class="fas fa-hospital"></i>
                    </span>  <span class="text">Enregistrer</span>
                </button>
            </form>
        </div>
    </div>


@endsection