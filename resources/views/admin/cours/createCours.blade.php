@extends('base')

@section('title','Création d\'un Cours')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <h3>Creation d'un cours</h3>
        <!--formulaire de creation d'un formation-->
        @include('admin.cours.formCours')
    </div>
</div>



@endsection
