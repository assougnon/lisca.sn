<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Protocoles</label>
            <input type="text" class="form-control text-capitalize" name="nomProtocol" value="{{old('nomProtocol') ?? $protocole->nom_hopital}}">
            @error('nomProtocol') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control text-capitalize" name="descriptionProtocole" value="{{old('descriptionProtocole') ?? $protocole->descriptionProtocole}}">
            @error('descriptionProtocole') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>

