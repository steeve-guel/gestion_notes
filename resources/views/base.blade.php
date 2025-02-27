<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>

    <div class="row mb-3 std-admin-dash-contain">
        <!--sidebars-->
        <div class="col-md-2 themed-grid-col">
            <div class="flex-shrink-0 p-3" style="width: 280px;border-right: 1px solid #c1c1c1;height:99.5vh;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-5 fw-semibold">MyStudentBF</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Dashboard
                        </button>
                        <div class="collapse show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{url('/formations')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Dashboard
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{url('/formations')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#formations-collapse" aria-expanded="false">
                            Formations
                        </button>
                        <div class="collapse" id="formations-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{url('/formations/newFormation')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nouvelle formation</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Toute les formations</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#unite_ens-collapse" aria-expanded="false">
                            UE & ECUE
                        </button>
                        <div class="collapse" id="unite_ens-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{url('/unite_ens/')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Liste des UE</a></li>
                                <li><a href="{{url('/cours/')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Liste des ECUE</a></li>
                                <li><a href="{{url('/unite_ens/newUniteEns')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nouvelle UE</a></li>
                                <li><a href="{{url('/cours/newCours')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nouveau ECUE</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#enseignants-collapse" aria-expanded="false">
                            Enseignants
                        </button>
                        <div class="collapse" id="enseignants-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{url('/enseignants/newEnseignant')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nouveau enseignant</a></li>
                                <li><a href="{{url('/enseignants/')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tout les enseignants</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#etudiants-collapse" aria-expanded="false">
                            Etudiants
                        </button>
                        <div class="collapse" id="etudiants-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{url('/etudiants/newEtudiant')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nouveau etudiant</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tout les etudiant</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--content-->
        <div class="col-md-10 themed-grid-col std-content">
            <div class="container px-5 ">

                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
