@extends('base')

@section('title','Enseignant')

@section('content')

<section class="  py-4 px-3 mx-auto">
    <section class="jumbotron">
        <section class="mb-5">
            <h2 class="std-ad-title1 ">Enseignants</h2>
            <small>Espace Administrateur</small>
        </section>

        <section class="std-formation-content">
            <h4>Liste des enseignants</h4>
            @include('admin.enseignant.listEnseignants')
        </section>

    </section>
</section>



@endsection
