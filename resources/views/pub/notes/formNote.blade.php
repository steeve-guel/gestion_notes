<section class="row my-2">
    <form action="" method="GET">
        <div class="col">
            <label for="formation_id" class="form-label">Formations</label>
            <select class="form-select" id="formation_id" name="formation_id" onchange="this.form.submit()" aria-label="Default select example">
                <option selected disabled>Open this select menu</option>
                @foreach($formations as $formation)
                <option value="{{$formation->id}}" {{ $formationId == $formation->id ? 'selected' : '' }}>{{$formation->grade}}</option>
                @endforeach
                @error("formation_id")
                {{$message}}
                @enderror
            </select>
        </div>
        <!--selected enseignant-->
        <div class="col">
            <label for="enseignant_id" class="form-label">Enseignant</label>
            <select class="form-select" id="enseignant_id" name="enseignant_id" onchange="this.form.submit()" aria-label="Default select example">
                <option selected disabled>Open this select menu</option>
                @foreach($enseignants as $enseignant)
                <option value="{{$enseignant->id}}" {{ $enseignantId == $enseignant->id ? 'selected' : '' }}>{{$enseignant->grade}} - {{$enseignant->nom}}</option>
                @endforeach
                @error("enseignant_id")
                {{$message}}
                @enderror
            </select>
        </div>
    </form>
</section>

<form action="" method="post">
    @csrf
    @method($note->id? "PATCH":"POST")

    <section class="container">
        <!--first row-->
        <section class="row">
            <!--selected formation-->

            <!--selected formation-->
            <div class="col">
                <label for="cours_id" class="form-label">Cours</label>
                <select class="form-select" id="cours_id" name="cours_id" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    @foreach($cours as $cour)
                    <option value="{{$cour->id}}">{{$cour->intitule}}</option>
                    @endforeach

                </select>
                @error("cours_id")
                {{$message}}
                @enderror
            </div>

            <!--selected formation-->
            <div class="col">
                <label for="etudiant_id" class="form-label">Etudiant</label>
                <select class="form-select" id="etudiant_id" name="etudiant_id" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    @foreach($etudiants as $etudiant)
                    <option value="{{$etudiant->id}}">{{$etudiant->ine}} - {{$etudiant->nom}}</option>
                    @endforeach
                    @error("etudiant")
                    {{$message}}
                    @enderror
                </select>
            </div>

        </section>
        <!-- row-->
        <section class="row">
            <!--note input-->
            <div class="col">
                <label for="note" class="form-label">Note</label>
                <input type="number" class="form-control" id="note" name="note" value="{{$note->note}}" placeholder="">
                @error("note")
                {{$message}}
                @enderror
            </div>

            <!--typeControl input-->
            <div class="col">
                <label for="typeControl" class="form-label">Type de control</label>
                <select class="form-select" id="typeControl" name="typeControl" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    <option value="Devoir" @selected(old('typeControl',$note->typeControl)=='Devoir')>Devoir</option>
                    <option value="Projet" @selected(old('niveau',$note->typeControl)=='Projet')>Projet</option>

                </select>
                @error("typeControl")
                {{$message}}
                @enderror
            </div>


        </section>

        <!---->
        <section class="row">

            <!--appreciation input-->
            <div class="col">
                <label for="appreciation" class="form-label">Appreciation</label>
                <input type="text" class="form-control" id="appreciation" name="appreciation" value="{{$note->appreciation}}" placeholder="">
                @error("appreciation")
                {{$message}}
                @enderror
            </div>

            <div class="col">
                <label for="dateControl" class="form-label">Date de control</label>
                <input type="date" class="form-control" id="dateControl" name="dateControl" value="{{$note->dateControl}}" required>
                @error("dateControl")
                {{$message}}
                @enderror
            </div>
        </section>
        <!--submit button-->
        <button class="btn btn-primary w-100 mt-3">
            @if($note->id)
            Modifier
            @else
            Creer
            @endif
        </button>
    </section>
</form>
