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

            <p>
                @if($formation->unite_ens)
                @foreach($formation->unite_ens as $unite_ens)
                    <p>Unite Enseignement : {{$unite_ens->intitule}}</p>
                @endforeach
                @endif
            </p>
            <!-- @dump($formation->niveaux) -->
        </article>


    </div>
</div>

@endsection
