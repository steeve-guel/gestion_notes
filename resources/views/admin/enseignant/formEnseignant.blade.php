<form action="" method="post">
    @csrf
    @method($enseignant->id? "PATCH":"POST")

    <div class="container">
        <!--first row-->
        <div class="row">
            <!--code input-->
            <div class="col">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{$enseignant->code}}" placeholder="EN111111">
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
                    <option @selected(old('formation_id',$enseignant->formation_id)==$formation->id) value="{{$formation->id}}">{{$formation->grade}}</option>
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
                <input type="text" class="form-control" id="nom" name="nom" value="{{$enseignant->nom}}" placeholder="Traore">
                @error("nom")
                {{$message}}
                @enderror
            </div>

            <!--prenom input-->
            <div class="col">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{$enseignant->prenom}}" placeholder="Pierre">
                @error("prenom")
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="row">
            <!--lieuNaiss input-->
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$enseignant->email}}" placeholder="exemple@gmail.com">
                @error("email")
                {{$message}}
                @enderror
            </div>

            <!--telephone input-->
            <div class="col">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{$enseignant->telephone}}" placeholder="+226 XX-XX-XX-XX" required>
                @error("telephone")
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="grade" class="form-label">Grade</label>
                <input type="text" class="form-control" id="grade" name="grade" value="{{$enseignant->grade}}" placeholder="Maitre Assistant" required>
                @error("grade")
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <!--submit button-->
                <button class="btn btn-primary w-100">
                    @if($enseignant->id)
                    Modifier
                    @else
                    Creer
                    @endif
                </button>
            </div>
        </div>


    </div>
</form>
