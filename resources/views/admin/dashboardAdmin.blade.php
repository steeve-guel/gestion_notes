@extends('base')

@section('title','Dashboard')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <h1>Espace administrateur</h1>

        @include('pub.listFormation')
    </div>
</div>



@endsection
