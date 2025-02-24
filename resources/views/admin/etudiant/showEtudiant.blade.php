@extends('base')

@section('title',$etudiant->nom)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article>
            <h2>INE : {{$etudiant->ine}}</h2>

            <p>
                Lieu : {{$etudiant->lieuNaiss}}
            </p>
            <p>
                Date : {{$etudiant->dateNaiss}}
            </p>
        </article>
    </div>
</div>

@endsection
