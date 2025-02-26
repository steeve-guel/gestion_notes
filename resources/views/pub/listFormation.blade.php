<!-- Afficher les formations -->
@if($formations->count() > 0)
    <table class="table std-tab">
        <thead>
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Domaine</th>
                <th scope="col">Mention</th>
                <th scope="col">Grade</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($formations as $formation)
            <tr>
                <th scope="row">{{$formation->code}}</th>
                <td>{{$formation->domaine}}</td>
                <td>{{$formation->mention}}</td>
                <td>{{$formation->grade}}</td>
                <td>
                    <a href="{{route('formation.show',['formation' => $formation])}}">voir</a>
                    <a href="{{route('editFormation',['formation' => $formation])}}">éditer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
{{ $formations->links() }}
@else
<p>Aucun post disponible.</p>
@endif

<!-- Afficher les liens de pagination -->
