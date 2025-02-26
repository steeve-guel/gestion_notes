@extends('base')

@section('title','Unité d\'enseignements')

@section('content')

<section class="  py-4 px-3 mx-auto">
    <section class="jumbotron">
        <section class="mb-5">
            <h2 class="std-ad-title1 ">Unité d'enseignements</h2>
            <small>Espace Administrateur</small>
        </section>

        <section class="std-formation-content">
            <h4>Liste des unités d'enseignements</h4>
            @include('admin.uniteEns.listUniteEns')
        </section>

    </section>
</section>



@endsection
