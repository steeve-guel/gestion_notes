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
    </form>
</section>

<section>
    <!-- Afficher les etudiant_enss -->
    @if($etudiants->count() > 0)
    <table class="table std-tab">
        <thead>
            <tr>
                <th scope="col">INE</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Lieu de naissance</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
                <th scope="row">{{$etudiant->ine}}</th>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->lieuNaiss}}</td>
                <td>{{$etudiant->dateNaiss}}</td>
                <td>
                    <a href="{{route('etudiant.show',['etudiant' => $etudiant])}}">voir</a>
                    <a href="{{route('editEtudiant',['etudiant' => $etudiant])}}">éditer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $etudiants->links() }}
    @else
    <p style="letter-spacing: 1px;font-weight:600;color:#EC058E;">
        Aucun etudiant disponible.
        Veuillez selectionner une formation.</p>
    @endif
</section>
