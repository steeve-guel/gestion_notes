@extends('base')

@section('title',$enseignant->nom)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article>
            <h2>Code : {{$enseignant->code}}</h2>

            <p>
                Grade : {{$enseignant->grade}}
            </p>

        </article>
    </div>
</div>

@endsection
