<form action="" method="post">
    @csrf
    @method($enseignant->id? "PATCH":"POST")

    @dump($enseignant->formations()->get())
    <div class="container">
        <!--first row-->
        <div class="row">
            @php
            $formationsId = $enseignant->formations()->pluck('id');
            $coursId = $enseignant->cours()->pluck('id');
            @endphp


            <!--selected formation-->
            <div class="col">
                <label for="formations" class="form-label">Formations</label>
                <select class="form-select" id="formations" name="formations[]" multiple aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    @foreach($formations as $formation)
                    <option @selected($formationsId->contains($formation->id)) value="{{$formation->id}}">{{$formation->grade}}</option>
                    @endforeach
                    @error("formations")
                    {{$message}}
                    @enderror
                </select>
            </div>

            <!--selected cours-->
            <div class="col">
                <label for="cours" class="form-label">Cours</label>
                <select class="form-select" id="cours" name="cours[]" multiple aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    @foreach($cours as $cour)
                    <option @selected($coursId->contains($cour->id)) value="{{$cour->id}}">{{$cour->intitule}}</option>
                    @endforeach
                    @error("cours")
                    {{$message}}
                    @enderror
                </select>
            </div>
        </div>

        <div class="row">
            <!--code input-->
            <div class="col">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{$enseignant->code}}" placeholder="EN111111">
                @error("code")
                {{$message}}
                @enderror
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
