<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Id Médicament</label>
            <input type="text" class="form-control text-capitalize" name="idMedicament" value="{{old('idMedicament') ?? $idMedicament->idMedicament}}">
            @error('idMedicament') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">Nom Médicament</label>
            <input type="text" class="form-control text-capitalize" name="nomMedicament" value="{{old('nomMedicament') ?? $idMedicament->nomMedicament}}">
            @error('nomMedicament') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">Forme Galinique</label>
            <input type="text" class="form-control text-capitalize" name="formeGalinique" value="{{old('formeGalinique') ?? $idMedicament->formeGalinique}}">
            @error('formeGalinique') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Dosage</label>
            <input type="text" class="form-control text-capitalize" name="dosageMedicament" value="{{old('dosageMedicament') ?? $idMedicament->dosageMedicament}}">
            @error('dosageMedicament') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-3">
    <div class="form-group">
        <label for="">Prix Médicament</label>
        <input type="text" class="form-control text-capitalize" name="prixMedicament" value="{{old('prixMedicament') ?? $idMedicament->prixMedicament}}">
        @error('prixMedicament') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
    </div>
</div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="">Qte en Stock</label>
            <input type="text" class="form-control text-capitalize" name="quantiteStockMed" value="{{old('quantiteStockMed') ?? $idMedicament->quantiteStockMed}}">
            @error('quantiteStockMed') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Seuil min</label>
            <input type="text" class="form-control text-capitalize" name="seuilMinMed" value="{{old('seuilMinMed') ?? $idMedicament->seuilMinMed}}">
            @error('seuilMinMed') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">Conditionnement</label>
            <input type="text" class="form-control text-capitalize" name="conditionnement" value="{{old('conditionnement') ?? $idMedicament->conditionnement}}">
            @error('conditionnement') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>


</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group d-flex flex-column">
            <label for="">Photo du médicament</label>
            <input  type="file" name="imageMedicament">
            @error('imageMedicament') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-6">

        <div class="form-group">
            <label for="">Provenance</label>
            <select name="provenanceMed" id="religion" class="form-control">
                @foreach($fournisseurs as $fourniss)
                <option value="{{$fourniss->nom_fournisseur}}" @if(old('provenanceMed',$idMedicament->provenanceMed) == '1') selected @endif>{{$fourniss->nom_fournisseur}}</option>
               @endforeach
            </select>
            @error('statutMalade') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>