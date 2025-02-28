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
            <label for="etudiant_id" class="form-label">Etudiant</label>
            <select class="form-select" id="etudiant_id" name="etudiant_id" onchange="this.form.submit()" aria-label="Default select example">
                <option selected disabled>Open this select menu</option>
                @foreach($etudiants as $etudiant)
                <option value="{{$etudiant->id}}" {{ $etudiantId == $etudiant->id ? 'selected' : '' }}>{{$etudiant->ine}} - {{$etudiant->nom}}</option>
                @endforeach
                @error("enseignant_id")
                {{$message}}
                @enderror
            </select>
        </div>
    </form>
</section>

<!-- Afficher les formations -->
@if($notes->count() > 0)
    <table class="table std-tab">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Note</th>
                <th scope="col">Appreciation</th>
                <th scope="col">Date de control</th>
                <th scope="col">Cours</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($notes as $note)
            <tr>
                <th scope="row">{{$note->id}}</th>
                <td>{{$note->note}}</td>
                <td>{{$note->appreciation}}</td>
                <td>{{$note->dateControl}}</td>
                <td>{{$note->cours->intitule}}</td>
                <td>
                    <a href="{{route('note.show',['note' => $note])}}">voir</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
{{ $notes->links() }}
@else
<p>Aucune note disponible. Veuillez selectionner les options disponibles.</p>
@endif
