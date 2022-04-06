@extends('baseUser')

@section('title', 'experience')

@section('experience')
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
                                <h5>Mis à jour d'expérience</h5>
                            </div>
                            <form action="{{ route('updateExperience.post', ['id' => $experience->id]) }}" method="post">
                                @csrf
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <ul class="list-unstyled" style="width:max-content">
                                            <li class="alert alert-danger">{{ $error }}</li>
                                        </ul>
                                    @endforeach
                                @endif

                                <div class="row mt-2">
                                    <div class="col-md-12 mb-3">
                                        <label class="labels" for="title">Titre <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Title" name="title"
                                            value="{{ $experience->title }}" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels" for="organizationName">Nom de l'organisme <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="companyName"
                                            name="companyName" value="{{ $experience->companyName }}" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6 mb-3">
                                        <label class="labels">Date de debut <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" placeholder="begin date"
                                            value="{{ $experience->beginDate }}" name="beginDate" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="labels">Date de fin <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" placeholder="end date"
                                            value="{{ $experience->endDate }}" name="endDate" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <label class="labels mb-1">Description de l'expérience <span
                                                class="text-danger">*</span></label>
                                        <textarea type="text" class="form-control" placeholder="Description" name="description"
                                            required>{{ $experience->descriptions }}</textarea>
                                        <p class="h6 text-danger mt-1">
                                            NB: Il est indispensable de séparer chaque étape de
                                            la description par un point-virgule ";"
                                        </p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6 mb-4">
                                            <label class="labels">Pays <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Country"
                                                value="{{ $experience->country }}" name="country" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">Ville <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="City"
                                                value="{{ $experience->city }}" name="city" required>
                                        </div>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary" type="submit">Modifier</button>
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
