<!-- Afficher les cours -->
@if($cours->count() > 0)
<table class="table std-tab">
    <thead>
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Intitule</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($cours as $cour)
        <tr>
            <th scope="row">{{$cour->code}}</th>
            <td>{{$cour->intitule}}</td>

            <td>
                <a href="{{route('cours.show',['cours' => $cour])}}">voir</a>
                <a href="">éditer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $cours->links() }}
@else
<p style="letter-spacing: 1px;font-weight:600;color:#EC058E;">
    Aucune unité d'enseignement disponible.
    Veuillez selectionner une formation.</p>
@endif


<!-- Afficher les liens de pagination -->
