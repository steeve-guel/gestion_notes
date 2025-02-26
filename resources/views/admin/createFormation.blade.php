@extends('base')

@section('title','Création d\'une formation')

@section('content')

<section class="  py-4 px-3 mx-auto">
    <section class="jumbotron">
        <div class="std-block py-3 mb-2 text-center">
            <h2>Creation d'une formation</h2>
            <small >Espace de création d'une nouvelle formation</small>
        </div>

        <!--formulaire de creation d'un formation-->
        <section class="container std-form py-4">
            @include('admin.formFormation')
        </section>

    </section>
</section>



@endsection
