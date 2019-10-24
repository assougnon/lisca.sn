@extends('dashbord')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modification du patient</h6>
        </div>
        <div class="card-body " >
            <form action="/malades/{{$maladeId->id}}" method="post"  enctype="multipart/form-data">
                @method('PATCH')
                @include('malade.form')
                <div class="col  text-center ">
                    <button class="btn btn-warning btn-icon-split btn-block col-md-6  ">    <span class="text font-weight-bold  text-white-50">Modifier</span>
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection