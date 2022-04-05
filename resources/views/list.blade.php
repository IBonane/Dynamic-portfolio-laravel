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
                            @if (session()->has('delete'))
                                <div class="alert alert-danger">
                                    {{ session()->get('delete') }}
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
                                        <h5>Aucun Profil</h5>
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
                                    </form>

                                </div>
                            </div>
                            {{-- End profil --}}

                            {{-- Competence --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Compétence</h5>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>compétence 1</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>compétence 2</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            {{-- End Competence --}}

                            {{-- Experience --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Expérience</h5>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>expérience 1</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>expérience 2</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            {{-- End Experience --}}

                            {{-- Formation --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Formation</h5>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>formation 1</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>formation 2</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            {{-- End Formation --}}

                            {{-- Certification --}}
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <h5 class="text-info">Certification</h5>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>certification 1</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>certification 2</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            {{-- End Certification --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
