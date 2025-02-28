@extends('base')

@section('title',$etudiant->nom)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article class="std-aritcle p-4">
            <h2 class="std-ad-title1 ">Détail enseignant</h2>

            <small>Découvrez toutes les informations essentielles sur cet etudiant.</small>

            <p>
                <strong>INE</strong> : <span>{{$etudiant->ine}}</span>
            </p>
            <p>
                <strong>Nom</strong> : <span>{{$etudiant->nom}}</span>
            </p>
            <p>
                <strong>Prénom</strong> : <span>{{$etudiant->prenom}}</span>
            </p>
            <p>
                <strong>Lieu de naissance</strong> : <span>{{$etudiant->lieuNaiss}}</span>
            </p>
            <p>
                <strong>Date de naissance</strong> : <span>{{$etudiant->dateNaiss}}</span>
            </p>

            <div>
                <h2 class="std-ad-title1 ">Formation associé</h2>

                <small>Inscrit a : </small>

                <p>
                    <strong>Domaine</strong> : <span>{{$formation->domaine}}</span>
                </p>
                <p>
                    <strong>Grade</strong> : <span>{{$formation->grade}}</span>
                </p>
                <p>
                    <strong>Spécialite</strong> : <span>{{$formation->specialite}}</span>
                </p>
            </div>

        </article>
    </div>
</div>

@endsection
