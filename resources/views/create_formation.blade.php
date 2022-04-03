@extends('baseUser')

@section('title', 'formation')

@section('formation')
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
                                <h5>Ajout de formation</h5>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mt-2">
                                    <div class="col-md-12 mb-3">
                                        <label class="labels" for="title">Titre de la formation</label>
                                        <input type="text" class="form-control" placeholder="Title and degree" name="title">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels" for="schoolName">Nom de l'établissement</label>
                                        <input type="text" class="form-control" placeholder="School or University Name"
                                            name="schoolName">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6 mb-3">
                                        <label class="labels">Date de debut</label>
                                        <input type="date" class="form-control" placeholder="begin date" name="beginDate">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="labels">Date de fin</label>
                                        <input type="date" class="form-control" placeholder="end date" name="endDate">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <label class="labels mb-1">Description de la formation</label>
                                        <textarea type="text" class="form-control" placeholder="Description" name="description"></textarea>
                                        <p class="h6 text-danger mt-1">
                                        </p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6 mb-4">
                                            <label class="labels">Pays</label>
                                            <input type="text" class="form-control" placeholder="Country" name="country">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">Ville</label>
                                            <input type="text" class="form-control" placeholder="City" name="city">
                                        </div>
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
