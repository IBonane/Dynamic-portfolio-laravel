@extends('baseUser')

@section('title', 'competence')

@section('competence')
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
                                <h5>Ajout de compétence</h5>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mt-2">
                                    <div class="col-md-12 mb-3">
                                        <label class="labels" for="title">Titre de la compétence</label>
                                        <input type="text" class="form-control" placeholder="Title" name="title">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <label class="labels mb-1">Description de la compétence</label>
                                        <textarea type="text" class="form-control" placeholder="Description" name="description"></textarea>
                                        <p class="h6 text-danger mt-1">
                                            NB: Il est indispensable de séparer chaque étape de
                                            la description par un point-virgule ";"
                                        </p>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary" type="submit">Ajouter</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
@endsection
