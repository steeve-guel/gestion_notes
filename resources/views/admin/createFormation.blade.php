@extends('base')

@section('title','Acceuil du blog')

@section('content')

<div class="  py-4 px-3 mx-auto">
    <div class="jumbotron">
        <h3>Creation d'un formation</h3>
        <!--formulaire de creation d'un formation-->
        <form action="" method="post">

            <div class="container">
                <!--first row-->
                <div class="row">
                    <!--code input-->
                    <div class="col">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="" placeholder="FN1111">
                    </div>
                    <!--domaine input-->
                    <div class="col">
                        <label for="domaine" class="form-label">Domaine</label>
                        <input type="text" class="form-control" id="domaine" name="domaine" value="" placeholder="Sciences et technologies">
                    </div>
                </div>
                <!--second row-->
                <div class="row">
                    <!--mention input-->
                    <div class="col">
                        <label for="mention" class="form-label">Mention</label>
                        <input type="text" class="form-control" id="mention" name="mention" value="" placeholder="Informatique">
                    </div>

                    <!--grade input-->
                    <div class="col">
                        <label for="grade" class="form-label">Grade</label>
                        <input type="text" class="form-control" id="grade" name="grade" value="" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">
                    </div>

                </div>
                <!--third row-->
                <div class="row">
                    <!--description input-->
                    <div class="col">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" value="" placeholder=""></textarea>
                    </div>
                </div>

                <!--submit button-->
                <button class="btn btn-primary" class="btn">
                    Creer
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
