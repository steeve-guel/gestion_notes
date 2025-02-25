
@extends('base')

@section('title','Création d\'un enseignant')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <h3>Creation d'un enseignant</h3>
        <!--formulaire de creation d'un formation-->
        @include('admin.enseignant.formEnseignant')
    </div>
</div>

@endsection
