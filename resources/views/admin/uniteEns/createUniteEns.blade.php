@extends('base')

@section('title','Création d\'un Niveau')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <div class="std-block py-3 mb-2 text-center">
            <h2>Creation d'un niveau</h2>
            <small>Espace de création d'une nouvelle formation</small>
        </div>

        <!--formulaire de creation d'un formation-->
        <section class="container std-form py-4">
            @include('admin.uniteEns.formUniteEns')
        </section>
    </div>
</div>

@endsection
