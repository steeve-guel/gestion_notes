
<!-- Afficher les enseignant_enss -->
@if($enseignants->count() > 0)
<table class="table std-tab">
    <thead>
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Grade</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($enseignants as $enseignant)
        <tr>
            <th scope="row">{{$enseignant->code}}</th>
            <td>{{$enseignant->nom}}</td>
            <td>{{$enseignant->prenom}}</td>
            <td>{{$enseignant->email}}</td>
            <td>{{$enseignant->telephone}}</td>
            <td>{{$enseignant->grade}}</td>
            <td>
                <a href="{{route('enseignant.show',['enseignant' => $enseignant])}}">voir</a>
                <a href="{{route('editEnseignant',['enseignant' => $enseignant])}}">éditer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $enseignants->links() }}
@else
<p style="letter-spacing: 1px;font-weight:600;color:#EC058E;">
    Aucune unité d'enseignement disponible.
     Veuillez selectionner une formation.</p>
@endif


<!-- Afficher les liens de pagination -->
