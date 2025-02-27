@extends('base')

@section('title',$enseignant->nom)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article class="std-aritcle p-4">

            <h2 class="std-ad-title1 ">Détail enseignant</h2>

            <small>Découvrez toutes les informations essentielles sur cet enseignant.</small>

            <div class="mt-3 std-detail">
                <p>
                    <strong>Code</strong> : <span>{{$enseignant->code}}</span>
                </p>
                <p>
                    <strong>Nom</strong> : <span>{{$enseignant->nom}}</span>
                </p>
                <p>
                    <strong>Prenom</strong> : <span>{{$enseignant->prenom}}</span>
                </p>
                <p>
                    <strong>Email</strong> : <span>{{$enseignant->email}}</span>
                </p>
                <p>
                    <strong>Telephone</strong> : <span>{{$enseignant->telephone}}</span>
                </p>
                <p>
                    <strong>Grade</strong> : <span>{{$enseignant->grade}}</span>
                </p>
            </div>
            <section class="row">
                <section class="col">
                    <h2 class="std-ad-title1 ">Formations associées</h2>
                    @if($formations->count() > 0)
                    <ul>
                        @foreach($formations as $formation)
                        <li>{{$formation->grade}}</li>
                        @endforeach
                    </ul>
                    @else
                    <p>Aucune fomations associées.</p>
                    @endif
                </section>
                <section class="col">
                    <h2 class="std-ad-title1 ">Cours associés</h2>
                    @if($cours->count() > 0)
                    <ul>
                        @foreach($cours as $cour)
                        <li>{{$cour->intitule}}</li>
                        @endforeach
                    </ul>
                    @else
                    <p>Aucun cour associé.</p>
                    @endif
                </section>

            </section>

        </article>
    </div>
</div>

@endsection
