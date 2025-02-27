@extends('base')

@section('title','ECUE')

@section('content')

<section class="  py-4 px-3 mx-auto">
    <section class="jumbotron">
        <section class="mb-5">
            <h2 class="std-ad-title1 ">Element Constitutif d'Unité d'enseignements (Cours)</h2>
            <small>Espace Administrateur</small>
        </section>

        <section class="std-formation-content">
            <h4>Liste des elemets constitutifs des unités d'enseignements</h4>
            @include('admin.cours.listCours')
        </section>

    </section>
</section>



@endsection
