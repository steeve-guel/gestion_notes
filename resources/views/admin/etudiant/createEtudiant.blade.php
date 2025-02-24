@extends('base')

@section('title','Création d\'un etudiant')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <h3>Creation d'un etudiant</h3>
        <!--formulaire de creation d'un formation-->
        @include('admin.etudiant.formEtudiant')
    </div>
</div>

@endsection
