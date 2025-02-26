@extends('base')

@section('title',$unite_ens->intitule)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article class="std-aritcle p-4">
            <h2 class="std-ad-title1 ">Détail Unite d'Enseignements (UE)</h2>

            <small>Découvrez toutes les informations essentielles sur cette formation,
                y compris le contenu, les objectifs, les modalités d'inscription et les prérequis.
                Pour en savoir plus, cliquez sur le lien ci-dessous.
            </small>
            <div class="mt-3 std-detail">
                <p>
                    <strong>Cdoe</strong> : <span>{{$unite_ens->code}}</span>
                </p>
                <p>
                    <strong>Intiutle</strong> : <span>{{$unite_ens->intitule}}</span>
                </p>
                <p>
                    <strong>Credits</strong> : <span>{{$unite_ens->credits}}</span>
                </p>
                <p>
                    <strong>Niveau</strong> : <span>{{$unite_ens->niveau}}</span>
                </p>
                <p>
                    <strong>Semestre</strong> : <span>{{$unite_ens->semestre}}</span>
                </p>
            </div>
        </article>
    </div>
</div>

@endsection
