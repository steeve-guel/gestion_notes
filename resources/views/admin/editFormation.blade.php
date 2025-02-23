@extends('base')

@section('title','Modification d\'une formation')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <h3>Modification d'une formation</h3>
        <!--formulaire de creation d'un formation-->
        @include('admin.formFormation')
    </div>
</div>



@endsection
