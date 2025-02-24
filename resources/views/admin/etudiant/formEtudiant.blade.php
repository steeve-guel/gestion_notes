<form action="" method="post">
    @csrf
    @method($etudiant->id? "PATCH":"POST")

    <div class="container">
        <!--first row-->
        <div class="row">
            <!--code input-->
            <div class="col">
                <label for="ine" class="form-label">INE</label>
                <input type="text" class="form-control" id="ine" name="ine" value="{{$etudiant->ine}}" placeholder="">
                @error("code")
                {{$message}}
                @enderror
            </div>

            <!--selected formation-->
            <div class="col">
                <label for="formation_id" class="form-label">Formations</label>
                <select class="form-select" id="formation_id" name="formation_id" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    @foreach($formations as $formation)
                    <option @selected(old('formation_id',$etudiant->formation_id)==$formation->id) value="{{$formation->id}}">{{$formation->grade}}</option>
                    @endforeach
                    @error("formation_id")
                    {{$message}}
                    @enderror
                </select>
            </div>

        </div>
        <!--second row-->
        <div class="row">
            <!--nom input-->
            <div class="col">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiant->nom}}" placeholder="">
                @error("mention")
                {{$message}}
                @enderror
            </div>

            <!--prenom input-->
            <div class="col">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{$etudiant->prenom}}" placeholder="">
                @error("prenom")
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="row">
            <!--lieuNaiss input-->
            <div class="col">
                <label for="lieuNaiss" class="form-label">Lieu de naissance</label>
                <input type="text" class="form-control" id="lieuNaiss" name="lieuNaiss" value="{{$etudiant->lieuNaiss}}" placeholder="">
                @error("mention")
                {{$message}}
                @enderror
            </div>

            <!--dateNaiss input-->
            <div class="col">
                <label for="dateNaiss" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="dateNaiss" name="dateNaiss" value="{{$etudiant->dateNaiss}}" required>
                @error("mention")
                {{$message}}
                @enderror
            </div>
        </div>

        <!--submit button-->
        <button class="btn btn-primary" class="btn">
            @if($etudiant->id)
            Modifier
            @else
            Creer
            @endif
        </button>
    </div>
</form>
