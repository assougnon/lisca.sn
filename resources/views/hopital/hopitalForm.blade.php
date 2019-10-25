<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Nom hopital</label>
            <input type="text" class="form-control text-capitalize" name="nom_hopital" value="{{old('nom_hopital') ?? $hopital->nom_hopital}}">
            @error('nom_hopital') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label for="">Teléphone</label>
            <input type="text" class="form-control text-capitalize" name="telephone_hopital" value="{{old('telephone_hopital') ?? $hopital->telephone_hopital}}">
            @error('telephone_hopital') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Adresse</label>
            <textarea name="adresse_hopital" class="form-control" id="" cols="30" rows="5" >{{old('adresse_hopital') ?? $hopital->adresse_hopital}}</textarea>
            @error('adresse_hopital') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>

</div>