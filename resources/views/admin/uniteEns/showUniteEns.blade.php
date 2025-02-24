@extends('base')

@section('title',$unite_ens->intitule)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article>
            <h2>Intitule : {{$unite_ens->intitule}}</h2>

            <p>
                Code : {{$unite_ens->code}}
            </p>
            <p>
                Specialite : {{$unite_ens->specialite}}
            </p>
        </article>
    </div>
</div>

@endsection
