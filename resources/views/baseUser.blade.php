<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link @yield('profil') h6" href="{{ route('createProfil.show') }}">Creation de
                            profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('experience') h6" href="{{ route('addExperience.show') }}">Ajout de
                            expérience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('competence') h6" href="{{ route('addSkill.show') }}">Ajout de
                            compétence</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('formation') h6" href="{{ route('addFormation.show') }}">Ajout de
                            formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('certification') h6"
                            href="{{ route('addCertification.show') }}">Ajout
                            de certification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('list') h6" href="{{ route('list.show') }}">Liste de mes
                            creations</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="bg-transparent border-0">
                        <a class="h6 text-warning text-center">Deconnexion</a>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    </div>

    @yield('content')
</body>

</html>
