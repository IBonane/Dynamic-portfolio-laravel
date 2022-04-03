@extends('admin')

@section('title', 'certification')

@section('certification')
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
                                <h5>Ajout de certification</h5>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label class="labels" for="title">Titre</label>
                                        <input type="text" class="form-control" placeholder="Title" name="title">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="labels" for="organizationName">Nom de l'organisme ou de la plateforme</label>
                                        <input type="text" class="form-control" placeholder="OrganizationName or websiteName" name="organizationName">
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Date d'obtention</label>
                                        <input type="date" class="form-control" placeholder="Birthday" name="birthday">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="labels mb-1">Donnez plus de détails</label>
                                        <textarea type="text" class="form-control" placeholder="Details" name="description"></textarea>
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
