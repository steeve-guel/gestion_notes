@extends('base')

@section('title','Note')

@section('content')

<section class="  py-4 px-3 mx-auto">
    <section class="jumbotron">
        <section class="mb-5">
            <h2 class="std-ad-title1 ">Notes</h2>
            <small>Espace Administrateur</small>
        </section>

        <section class="std-formation-content">
            <h4>Detail Notes</h4>

            @include('pub.notes.listNote')
        </section>
    </section>
</section>



@endsection
