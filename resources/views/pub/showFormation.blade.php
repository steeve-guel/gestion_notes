@extends('base')

@section('title',$formation->grade)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article class="std-aritcle p-4">

            <h2 class="std-ad-title1 ">Détail formations</h2>

            <small>Découvrez toutes les informations essentielles sur cette formation,
                y compris le contenu, les objectifs, les modalités d'inscription et les prérequis.
                Pour en savoir plus, cliquez sur le lien ci-dessous.
            </small>
            <div class="mt-3 std-detail">
                <p>
                    <strong>Grade</strong> : <span>{{$formation->grade}}</span>
                </p>
                <p>
                    <strong>Code</strong> : <span>{{$formation->code}}</span>
                </p>
                <p>
                    <strong>Mention</strong> : <span>{{$formation->mention}}</span>
                </p>
                <p>
                    <strong>Domaine</strong> : <span>{{$formation->domaine}}</span>
                </p>
                <p>
                    <strong>Spécialite</strong> : <span>{{$formation->specialite}}</span>
                </p>

                <p>
                    <strong>Description</strong> : <span>{{$formation->description}}</span>
                </p>

                <!-- <p>
                    @if($formation->unite_ens)
                    Unite Enseignement :
                    @foreach($formation->unite_ens as $unite_ens)
                    <p> {{$unite_ens->intitule}}</p>
                    @endforeach
                    @endif
                </p> -->
            </div>



            <!-- @dump($formation->niveaux) -->
        </article>


    </div>
</div>

@endsection
