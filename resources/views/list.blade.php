@extends('baseUser')

@section('title', 'list')

@section('list')
    active
@endsection

@section('content')
    <main class="mt-5" style="background: whitesmoke">
        <div class="d-flex justify-content-center">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @if (session()->has('warning'))
                                <div class="alert alert-danger">
                                    {{ session()->get('warning') }}
                                </div>
                            @endif

                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <h5>Liste de mes créations</h5>
                            </div>
                            {{-- Profil --}}
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <h5 class="text-info">Profil</h5>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    @if (empty($name))
                                        <h5 class="text-danger">Aucun Profil</h5>
                                        <a class="btn btn-warning" href="{{ route('createProfil.show') }}">Créer
                                            maintenant</a>
                                    @else
                                        <h5>{{ $name }}</h5>

                                        <a class="btn btn-warning" href="{{ route('updateProfil.show') }}">Editer</a>
                                        <a class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Supprimer</a>
                                    @endif

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Souhaitez-vous vraiment supprimer ce profil ?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('deleteProfil.post') }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">OUI</button>
                                                    </form>
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">NON</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End profil --}}

                            {{-- Competence --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Compétences</h5>
                            </div>

                            @if (empty($skills))
                                <div class="row mt-2 card">
                                    <div class="col-md-12 card-body d-flex justify-content-between">
                                        <h5 class="text-danger">Aucune compétence</h5>
                                        <a class="btn btn-warning" href="{{ route('addSkill.show') }}">
                                            Ajouter maintenant
                                        </a>
                                    </div>
                                </div>
                            @else
                                @foreach ($skills as $skill)
                                    <div class="row mt-2 card">
                                        <div class="col-md-12 card-body d-flex justify-content-between">
                                            <h5>{{ $skill->title }}</h5>
                                            <a class="btn btn-warning"
                                                href="{{ route('updateSkill.show', ['id' => $skill->id]) }}">Editer</a>
                                            <a class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $skill->id }}">Supprimer</a>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $skill->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Souhaitez-vous vraiment supprimer cette compétence ?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('deleteSkill.post', ['id' => $skill->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">OUI</button>
                                                    </form>
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">NON</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            {{-- End Competence --}}

                            {{-- Experience --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Expériences</h5>
                            </div>

                            @if (empty($experiences))
                                <div class="row mt-2 card">
                                    <div class="col-md-12 card-body d-flex justify-content-between">
                                        <h5 class="text-danger">Aucune Expérience</h5>
                                        <a class="btn btn-warning" href="{{ route('addExperience.show') }}">
                                            Ajouter maintenant
                                        </a>
                                    </div>
                                </div>
                            @else
                                @foreach ($experiences as $experience)
                                    <div class="row mt-2 card">
                                        <div class="col-md-12 card-body d-flex justify-content-between">
                                            <h5>expérience 1</h5>
                                            <button class="btn btn-warning">Editer</button>
                                            <button class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- End Experience --}}

                            {{-- Formation --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Formations</h5>
                            </div>

                            @if (empty($formations))
                                <div class="row mt-2 card">
                                    <div class="col-md-12 card-body d-flex justify-content-between">
                                        <h5 class="text-danger">Aucune Formation</h5>
                                        <a class="btn btn-warning" href="{{ route('addFormation.show') }}">
                                            Ajouter maintenant
                                        </a>
                                    </div>
                                </div>
                            @else
                                @foreach ($formations as $formation)
                                    <div class="row mt-2 card">
                                        <div class="col-md-12 card-body d-flex justify-content-between">
                                            <h5>formation 1</h5>
                                            <button class="btn btn-warning">Editer</button>
                                            <button class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            {{-- End Formation --}}

                            {{-- Certification --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Certifications</h5>
                            </div>
                            @if (empty($certificates))
                                <div class="row mt-2 card">
                                    <div class="col-md-12 card-body d-flex justify-content-between">
                                        <h5 class="text-danger">Aucune Certification</h5>
                                        <a class="btn btn-warning" href="{{ route('addCertification.show') }}">
                                            Ajouter maintenant
                                        </a>
                                    </div>
                                </div>
                            @else
                                @foreach ($certificates as $certificate)
                                    <div class="row mt-2 card">
                                        <div class="col-md-12 card-body d-flex justify-content-between">
                                            <h5>{{ $certificate->title }}</h5>
                                            <a class="btn btn-warning"
                                                href="{{ route('updateCertification.show', ['id' => $certificate->id]) }}">Editer</a>
                                            <a class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $certificate->id }}">Supprimer</a>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $certificate->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Souhaitez-vous vraiment supprimer ce certificat ?
                                                </div>
                                                <div class="modal-footer">
                                                    <form
                                                        action="{{ route('deleteCertification.post', ['id' => $certificate->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">OUI</button>
                                                    </form>
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">NON</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- End Certification --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
