@extends('base')

@section('title','Création d\'un Cours')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <div class="std-block py-3 mb-2 text-center">
            <h2>Creation d'un cours</h2>
            <small>Espace de création d'une nouvelle formation</small>
        </div>

        <!--formulaire de creation d'un formation-->
        <section class="container std-form py-4">
            @include('admin.cours.formCours')
        </section>
    </div>
</div>



@endsection
