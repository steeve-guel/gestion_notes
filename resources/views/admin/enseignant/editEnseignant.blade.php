@extends('base')

@section('title','Modification d\'un enseignant')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <div class="std-block py-3 mb-2 text-center">
            <h2>Modification d'un enseignant</h2>
            <small>Espace de création d'un nouvel enseignant</small>
        </div>

        <!--formulaire de creation d'un enseignant-->
        <section class="container std-form py-4">
            @include('admin.enseignant.formEnseignant')
        </section>


    </div>
</div>

@endsection
