@extends('base')

@section('title','Dashboard')

@section('content')

<section class="  py-4 px-3 mx-auto">
    <section class="jumbotron">
        <section class="mb-5">
            <h2 class="std-ad-title1 ">DASHBOARD</h2>
            <small>Espace Administrateur</small>
        </section>


        <div class="container text-center align-item-center">
            <div class="row mb-5">
                <div class="col std-nbr-obj mx-2 py-2">
                    <p class="std-obj-title">Formations</p>
                    <p class="std-obj-val">{{$formations->total()}}</p>
                </div>
                <div class="col std-nbr-obj mx-2">
                    <p class="std-obj-title">Etudiants</p>
                    <p class="std-obj-val">{{$etudiants->total()}}</p>

                </div>
                <div class="col std-nbr-obj mx-2">
                    <p class="std-obj-title">Enseignants</p>
                    <p class="std-obj-val">{{$enseignants->total()}}</p>
                </div>
                <div class="col std-nbr-obj mx-2">
                    <p class="std-obj-title">UE</p>
                    <p class="std-obj-val">{{$unite_ens->total()}}</p>
                </div>
                <div class="col std-nbr-obj mx-2">
                    <p class="std-obj-title">ECUE</p>
                    <p class="std-obj-val">{{$cours->total()}}</p>
                </div>
            </div>
        </div>

        <section class="std-formation-content">
            <h4>Liste des formations</h4>
            @include('pub.listFormation')
        </section>

    </section>
</section>



@endsection
