
<form action="" method="post">
    @csrf
    @method($cours->id? "PATCH":"POST")

    <div class="container">
        <!--first row-->
        <div class="row">
            <!--code input-->
            <div class="col">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{$cours->code}}" placeholder="FN1111">
                @error("code")
                {{$message}}
                @enderror
            </div>

            <!--selected formation-->
            <div class="col">
                <label for="unite_ens_id" class="form-label">Unite d'enseignement</label>
                <select class="form-select" id="unite_ens_id" name="unite_ens_id" aria-label="Default select example">
                    <option selected disabled>Open this select menu</option>
                    @foreach($unites as $unite)
                    <option value="{{$unite->id}}">{{$unite->intitule}}</option>
                    @endforeach
                    @error("unite_ens_id")
                    {{$message}}
                    @enderror
                </select>
            </div>

        </div>
        <!--second row-->
        <div class="row">
            <!--intitule input-->
            <div class="col">
                <label for="intitule" class="form-label">Intitule</label>
                <input type="text" class="form-control" id="intitule" name="intitule" value="" placeholder="Informatique">
                @error("intitule")
                {{$message}}
                @enderror
            </div>

            <!--credits input-->
            <div class="col">
                <label for="coeff" class="form-label">Coefficient</label>
                <input type="number" class="form-control" id="coeff" name="coeff" value="" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">
                @error("coeff")
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="row">
            <!--niveau input-->
            <div class="col">
                <label for="coursMagistral" class="form-label">CM</label>
                <input type="number" class="form-control" id="coursMagistral" name="coursMagistral" value="" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">

            </div>

            <!--semestre input-->
            <div class="col">
                <label for="tDiriges" class="form-label">TD</label>
                <input type="number" class="form-control" id="tDiriges" name="tDiriges" value="" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">
            </div>
        </div>
        <div class="row">
            <!--niveau input-->
            <div class="col">
                <label for="tPratiques" class="form-label">TP</label>
                <input type="number" class="form-control" id="tPratiques" name="tPratiques" value="" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">

            </div>

            <!--semestre input-->
            <div class="col">
                <label for="tPersEtudiant" class="form-label">TPE</label>
                <input type="number" class="form-control" id="tPersEtudiant" name="tPersEtudiant" value="" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">
            </div>
        </div>
        <div class="row">
            <!--niveau input-->
            <div class="col">
                <label for="volmHoraireTPers" class="form-label">VHTP</label>
                <input type="number" class="form-control" id="volmHoraireTPers" name="volmHoraireTPers" value="" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">

            </div>

        </div>

        <!--submit button-->
        <button class="btn btn-primary w-100 mt-3">
            @if($cours->id)
            Modifier
            @else
            Creer
            @endif
        </button>
    </div>
</form>
