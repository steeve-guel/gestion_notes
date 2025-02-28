@extends('base')

@section('title','Etudiants')

@section('content')

<section class="  py-4 px-3 mx-auto">
    <section class="jumbotron">
        <section class="mb-5">
            <h2 class="std-ad-title1 ">Etudiants</h2>
            <small>Espace Administrateur</small>
        </section>

        <section class="std-formation-content">
            <h4>Liste des etudiants</h4>
            @include('admin.etudiant.listEtudiant')
        </section>

    </section>
</section>



@endsection
