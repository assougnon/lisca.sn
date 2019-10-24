<div class="row">
    <div class="col-md-7">
        <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control text-capitalize" name="prenom" value="{{old('prenom') ?? $maladeId->prenom}}">
            @error('prenom') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="">nom</label>
            <input type="text" class="form-control text-uppercase" name="nom"  id="nom" style="text-transform: capitalize;" value="{{old('nom') ?? $maladeId->nom}}">
             @error('nom') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-1">
        <div class="form-group">
            <label for="">Age</label>
            <input type="text" class="form-control" name="age" value="{{old('age',$maladeId->age )}}">

            @error('age') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Numeéro de suivi</label>
            <input type="text" class="form-control" name="numeroSuivi" value="{{old('age') ?? $maladeId->numeroSuivi}}">
        </div>

    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Sexe</label>
            <select class="form-control" id="exampleFormControlSelect1" name="sexe" >

                <option value="" disabled >Sexe Patient</option>
                <option value="Homme" @if(old('sexe',$maladeId->sexe) == 'Homme') selected @endif >Homme</option>
                <option value="Femme" @if(old('sexe',$maladeId->sexe) == 'Femme') selected @endif >Femme</option>

            </select>
            @error('sexe') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">Lieu de Suivie</label>
            <input type="text" class="form-control text-capitalize" name="lieuSuivi" value="{{old('lieuSuivi') ?? $maladeId->lieuSuivi}}">
            @error('lieuSuivi') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="example-date-input">Date de naissance</label>



            <input class="form-control" type="date"  @if(isset($maladeId->datenaiss)) value="{{date_create($maladeId->datenaiss)->format('Y-m-d')}}"  @endif id="datanaiss" name="datenaiss" >

            @error('datenaiss') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Numéro CIN</label>
            <input type="text" class="form-control" name="ninp" autocomplete="off" value="{{old('ninp') ?? $maladeId->ninp}}">
            @error('ninp') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Numéro de Téléphone 1</label>
            <input type="text" class="form-control" name="numTel" value="{{old('numTel') ?? $maladeId->numTel}}">
            @error('numTel') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Numeéro de Téléphone 2</label>
            <input type="text" class="form-control" name="numTel1" value="{{old('numTel1') ?? $maladeId->numTel1}}">
            @error('numTel1') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Nationalité</label>
            <input type="text" class="form-control text-capitalize" name="nationalite" value="{{old('nationalite') ?? $maladeId->nationalite}}">
            @error('nationalite') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="religion">Religion</label>
            <select name="religion" id="religion" class="form-control" value="{{old('religion') ?? $maladeId->religion}}">
                <option value="Musulman" @if(old('sexe',$maladeId->religion) == 'Musulman') selected @endif>Musulman</option>
                <option value="Chrétien" @if(old('sexe',$maladeId->religion) == 'Chrétien') selected @endif>Chrétien</option>
            </select>
            @error('religion') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Ethnie</label>
            <input type="text" class="form-control text-capitalize" name="ethnie" value="{{old('ethnie') ?? $maladeId->ethnie}}">
            @error('ethnie') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">Profession</label>
            <input type="text" class="form-control text-capitalize" name="profession" value="{{old('profession') ?? $maladeId->profession}}">
            @error('profession') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">Niveau Intelectuel</label>
            <input type="text" class="form-control text-capitalize" name="niveauIntelec" value="{{old('niveauIntelec') ?? $maladeId->niveauIntelec}}">
            @error('niveauIntelec') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Adresse</label>
            <input type="text" class="form-control text-capitalize" name="adresse" value="{{old('adresse') ?? $maladeId->adresse}}">
            @error('adresse') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Personne à contacter 1</label>
            <input type="text" class="form-control" name="pccb1" value="{{old('pccb1') ?? $maladeId->pccb1}}">
            @error('pccb1') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Personne à contacter 2</label>
            <input type="text" class="form-control" name="pccb2" value="{{old('pccb1') ?? $maladeId->pccb2}}">
            @error('pccb2') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Habitat</label>
            <input type="text" class="form-control" name="habitat" value="{{old('habitat') ?? $maladeId->habitat}}">
            @error('habitat') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Statut Habitat</label>
            <select name="statuthabitat" id="religion" class="form-control" >
                <option value="Locataire" @if(old('sexe',$maladeId->statuthabitat) == 'Locataire') selected @endif>Locataire</option>
                <option value="Propiétaire"@if(old('sexe',$maladeId->statuthabitat) == 'Propiétaire') selected @endif>Propiétaire</option>
            </select>
            @error('statuthabitat') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Statut Malade</label>
            <select name="statutMalade" id="religion" class="form-control">
                <option value="1" @if(old('statutMalade',$maladeId->statutMalade) == '1') selected @endif>Traitement en cours</option>
                <option value="2" @if(old('statutMalade',$maladeId->statutMalade) == '2') selected @endif>En rémission</option>
                <option value="3" @if(old('statutMalade',$maladeId->statutMalade) == '3') selected @endif >Guéri</option>
                <option value="4" @if(old('statutMalade',$maladeId->statutMalade) == '4') selected @endif>Décédé</option>
            </select>
            @error('statutMalade') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group d-flex flex-column">
            <label for="">Photo du patient</label>
            <input  type="file" name="image">
            @error('image') <small  class="form-text  text-danger"> {{$message}} </small> @enderror
        </div>
    </div>
</div>


@csrf