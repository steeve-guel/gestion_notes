<!-- Afficher les formations -->
@if($formations->count() > 0)
<ul>
    @foreach($formations as $formation)
    <table class="table">
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

        </tbody>
    </table>
    @endforeach
</ul>
@else
<p>Aucun post disponible.</p>
@endif

<!-- Afficher les liens de pagination -->
{{ $formations->links() }}
