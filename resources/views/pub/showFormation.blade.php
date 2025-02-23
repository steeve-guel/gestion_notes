@extends('base')

@section('title',$formation->grade)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article>
            <h1>Grade : {{$formation->grade}}</h1>

            <p>
                Code : {{$formation->code}}
            </p>
            <p>
                Mention : {{$formation->mention}}
            </p>
            <p>
                Domaine : {{$formation->domaine}}
            </p>
            <p>
                Description : {{$formation->description}}
            </p>
        </article>


    </div>
</div>

@endsection
