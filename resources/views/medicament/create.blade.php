@extends('dashbord')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Enregistrement d'un médicament</h6>
        </div>
        <div class="card-body " >
            <form action="/medicaments" method="post"  enctype="multipart/form-data">
                @csrf
                @include('medicament.form')

                <button class="btn btn-success btn-icon-split btn-lg">  <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>  <span class="text">Envoyer</span>
                </button>
            </form>
        </div>
    </div>

@endsection