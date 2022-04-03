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
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <h5>Liste de mes créations</h5>
                            </div>
                            {{-- Profil --}}
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <h5 class="text-info">Profil</h5>
                            </div>
                            <div class="row mt-2 card">
                                <div class="col-md-12 card-body d-flex justify-content-between">
                                    <h5>Mon profil</h5>
                                    <button class="btn btn-warning">Editer</button>
                                    <button class="btn btn-danger">Supprimer</button>
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
