@extends('base')

@section('title','Ajout d\'une note')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <div class="std-block py-3 mb-2 text-center">
            <h2>Ajout d'une note</h2>
            <small>Espace d'attribution d'une note a un etudiant</small>
        </div>

        <!--formulaire de creation d'un enseignant-->
        <section class="container std-form py-4">
            @include('pub.notes.formNote')
        </section>


    </div>
</div>

@endsection
