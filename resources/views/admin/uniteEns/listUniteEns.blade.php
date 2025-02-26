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

@dump($formations)
<!-- Afficher les unite_enss -->
@if($unites->count() > 0)
<table class="table std-tab">
    <thead>
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Intitule</th>
            <th scope="col">Credits</th>
            <th scope="col">niveau</th>
            <th scope="col">semestre</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($unites as $unite)
        <tr>
            <th scope="row">{{$unite->code}}</th>
            <td>{{$unite->intitule}}</td>
            <td>{{$unite->credits}}</td>
            <td>{{$unite->niveau}}</td>
            <td>{{$unite->semestre}}</td>
            <td>
                <a href="{{route('unite_ens.show',['unite_ens' => $unite])}}">voir</a>
                <a href="{{route('editUniteEns',['unite_ens' => $unite])}}"">éditer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $unites->links() }}
@else
<p style="letter-spacing: 1px;font-weight:600;color:#EC058E;">
    Aucune unité d'enseignement disponible.
     Veuillez selectionner une formation.</p>
@endif


<!-- Afficher les liens de pagination -->
