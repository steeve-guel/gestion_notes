<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    <section class="std-log ">
        <section class="container">

            <div class="jumbotron position-absolute top-50 start-50 translate-middle std-contain">
                <div class="text-center mb-5">
                    <h1 class="std-log-l1">Connexion</h1>
                    <small>Bienvenue dans l'espace de connexion de MyStudentBF</small>
                </div>

                <form action="" class="vstack gap-3" method="post">
                    @csrf

                    <section>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                            @error("email")
                            {{$message}}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" value="">
                            @error("password")
                            {{$message}}
                            @enderror
                        </div>
                    </section>

                    <button class="btn std-btn">
                        Se connecter
                    </button>
                </form>
            </div>
        </section>

    </section>
</body>

</html>
