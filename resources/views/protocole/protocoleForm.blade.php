<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Nom Protocole</label>
            <input type="text" class="form-control text-capitalize" name="nomProtocol" value="{{old('nomProtocol') ?? $protocole->nomProtocol}}">
            @error('nomProtocol') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control text-capitalize" name="descriptionProtocole" value="{{old('descriptionProtocole') ?? $protocole->descriptionProtocole}}">
            @error('descriptionProtocole') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>
