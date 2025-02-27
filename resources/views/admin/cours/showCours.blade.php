@extends('base')

@section('title',$cours->intitule)

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">

        <article class="std-aritcle p-4">
            <h2 class="std-ad-title1 ">Détail sur l'ECUE</h2>

            <small>Découvrez toutes les informations essentielles sur cet cours.</small>

            <div class="mt-3 std-detail">
                <p>
                    <strong>Code</strong> : <span>{{$cours->code}}</span>
                </p>
                <p>
                    <strong>Intitutle</strong> : <span>{{$cours->intitule}}</span>
                </p>

            </div>
            <section>
                <h2 class="std-ad-title1 ">UE associé</h2>

                @foreach($cours->unite_ens as $unite)

                <ul>
                    <li>
                        Intitule {{$unite->intitule}} | Credits : {{$unite->credits}}
                        <br>
                        (Coefficient {{$cours->intitule}} : {{ $unite->pivot->coeff }})
                        <br>
                        (Cours Magistral : {{ $unite->pivot->coursMagistral }})
                        <br>
                        (TD : {{ $unite->pivot->tDiriges }})
                        <br>
                        (TP : {{ $unite->pivot->tPratiques }})
                        <br>
                        (TPE : {{ $unite->pivot->tPersEtudiant }})
                        <br>
                        <small>Créé le : {{ $unite->pivot->created_at->format('d/m/Y H:i') }}</small>
                        <br>
                        <small>Mis à jour le : {{ $unite->pivot->updated_at->format('d/m/Y H:i') }}</small>
                    </li>
                </ul>

                @endforeach
            </section>


        </article>
    </div>
</div>

@endsection
