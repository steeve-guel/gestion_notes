@extends('base')

@section('title',$cours->intitule)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article>
            <h2>Intitule : {{$cours->intitule}}</h2>

            @foreach($cours->unite_ens as $unite)
            <li>
                (Coefficient : {{ $unite->pivot->coeff }})
                <br>
                <small>Créé le : {{ $unite->pivot->created_at->format('d/m/Y H:i') }}</small>
                <br>
                <small>Mis à jour le : {{ $unite->pivot->updated_at->format('d/m/Y H:i') }}</small>
            </li>
            @endforeach
        </article>
    </div>
</div>

@endsection
