@extends('base')

@section('title',$note->nom)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article class="std-aritcle p-4">
            <h2 class="std-ad-title1 ">Détail enseignant</h2>

            <small>Découvrez toutes les informations essentielles sur cet note.</small>

            <p>
                <strong>INE</strong> : <span>{{$note->note}}</span>
            </p>
            <p>
                <strong>Nom</strong> : <span>{{$note->typeControl}}</span>
            </p>
            <p>
                <strong>Prénom</strong> : <span>{{$note->appreciation}}</span>
            </p>

            <p>
                <strong>Date de naissance</strong> : <span>{{$note->dateControl}}</span>
            </p>

        </article>
    </div>
</div>

@endsection
