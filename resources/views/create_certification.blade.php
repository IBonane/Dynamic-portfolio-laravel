@extends('baseUser')

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
                            <p class="text-danger">Tous les champs en "*" sont obligatoires</p>
                            <form action="{{ route('addCertification.post') }}" method="post">
                                @csrf

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <ul class="list-unstyled" style="width:max-content">
                                            <li class="alert alert-danger">{{ $error }}</li>
                                        </ul>
                                    @endforeach
                                @endif

                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label class="labels" for="title">Titre <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Title" name="title" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="labels">Nom de l'organisme ou de la
                                            plateforme <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="OrganizationName or websiteName" name="organizationName" required>
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Date d'obtention <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" placeholder="Receipt date"
                                            name="receiptDate" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="labels mb-1">Donnez plus de détails <span
                                                class="text-danger">*</span></label>
                                        <textarea type="text" class="form-control" placeholder="Details" name="description" required></textarea>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6 mb-4">
                                            <label class="labels">Pays <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Country" name="country"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">Ville <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="City" name="city"
                                                required>
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
