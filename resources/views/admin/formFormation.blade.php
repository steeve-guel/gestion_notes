<form action="" method="post">
    @csrf
    @method($formation->id? "PATCH":"POST")

    <div class="container">
        <!--first row-->
        <div class="row">
            <!--code input-->
            <div class="col">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{$formation->code}}" placeholder="FN1111">
                @error("code")
                {{$message}}
                @enderror
            </div>
            <!--domaine input-->
            <div class="col">
                <label for="domaine" class="form-label">Domaine</label>
                <input type="text" class="form-control" id="domaine" name="domaine" value="{{$formation->domaine}}" placeholder="Sciences et technologies">
                @error("domaine")
                {{$message}}
                @enderror
            </div>
        </div>
        <!--second row-->
        <div class="row">
            <!--mention input-->
            <div class="col">
                <label for="mention" class="form-label">Mention</label>
                <input type="text" class="form-control" id="mention" name="mention" value="{{$formation->mention}}" placeholder="Informatique">
                @error("mention")
                {{$message}}
                @enderror
            </div>

            <!--grade input-->
            <div class="col">
                <label for="grade" class="form-label">Grade</label>
                <input type="text" class="form-control" id="grade" name="grade" value="{{$formation->grade}}" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">
                @error("grade")
                {{$message}}
                @enderror
            </div>

        </div>
        <!--third row-->
        <div class="row">
            <div class="col">
            <label for="specialite" class="form-label">Specialite</label>
                <input type="text" class="form-control" id="specialite" name="specialite" value="{{$formation->grade}}" placeholder="MASTER SYSTEMES D'INFORMATION (SI)">
                @error("specialite")
                {{$message}}
                @enderror
            </div>
        </div>
        <!--four row-->
        <div class="row">
            <!--description input-->
            <div class="col">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="">{{$formation->description}}</textarea>
                @error("description")
                {{$message}}
                @enderror
            </div>
        </div>

        <!--submit button-->
        <button class="btn btn-primary" class="btn">
            @if($formation->id)
            Modifier
            @else
            Creer
            @endif
        </button>
    </div>
</form>
