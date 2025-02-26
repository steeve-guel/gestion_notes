<form action="" method="post">
    @csrf
    @method($unite_ens->id? "PATCH":"POST")

    <div class="container">
        <!--first row-->
        <div class="row">
            <!--code input-->
            <div class="col">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{$unite_ens->code}}" placeholder="FN1111">
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
                    <option @selected(old('formation_id',$unite_ens->formation_id)==$formation->id) value="{{$formation->id}}">{{$formation->grade}}</option>
                    @endforeach
                    @error("formation_id")
                    {{$message}}
                    @enderror
                </select>
            </div>

        </div>
        <!--second row-->
        <div class="row">
            <!--intitule input-->
            <div class="col">
                <label for="intitule" class="form-label">Intitule</label>
                <input type="text" class="form-control" id="intitule" name="intitule" value="{{$unite_ens->intitule}}" placeholder="Informatique">
                @error("mention")
                {{$message}}
                @enderror
            </div>

            <!--credits input-->
            <div class="col">
                <label for="credits" class="form-label">Credits</label>
                <input type="number" class="form-control" id="credits" name="credits" value="{{$unite_ens->credits}}" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">
                @error("credits")
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="row">
            <!--niveau input-->
            <div class="col">
                <label for="niveau" class="form-label">Niveau</label>
                <select class="form-select" id="niveau" name="niveau" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    <option value="Licence 1">Licence 1</option>
                    <option value="Licence 2">Licence 2</option>
                    <option value="Licence 3">Licence 3</option>
                    <option value="Master 1">Master 1</option>
                    <option value="Master 2">Master 2</option>
                </select>
                @error("niveau")
                {{$message}}
                @enderror
            </div>

            <!--semestre input-->
            <div class="col">
                <label for="semestre" class="form-label">Semestre</label>
                <select class="form-select" id="semestre" name="semestre" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    <option value="Semestre 1">Semestre 1</option>
                    <option value="Semestre 2">Semestre 2</option>
                    <option value="Semestre 3">Semestre 3</option>
                    <option value="Semestre 4">Semestre 4</option>
                    <option value="Semestre 5">Semestre 5</option>
                    <option value="Semestre 6">Semestre 6</option>
                </select>
                @error("semestre")
                {{$message}}
                @enderror
            </div>
        </div>

        <!--submit button-->
        <button class="btn btn-primary w-100 mt-3">
            @if($unite_ens->id)
            Modifier
            @else
            Creer
            @endif
        </button>
    </div>
</form>
