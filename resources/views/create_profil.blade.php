@extends('baseUser')

@section('title', 'profil')

@section('profil')
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
                                <h5>Création de profil</h5>
                            </div>
                            <p class="text-danger">Tous les champs en "*" sont obligatoires</p>
                            <form action="{{ route('createProfil.post') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <ul class="list-unstyled" style="width:max-content">
                                            <li class="alert alert-danger">{{ $error }}</li>
                                        </ul>
                                    @endforeach
                                @endif

                                @if (session()->has('warning'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('warning') }}
                                    </div>
                                @endif
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label class="labels" for="firstname">Prenom <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="First name" name="firstname"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="labels" for="lastname">Nom <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Last name" name="lastname"
                                            required>
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Date de naissance <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" placeholder="Birthday" name="birthday"
                                            required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Contact <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control"
                                            placeholder="Phone number format : +33 6 11 11 12 12 ; Ecrire sans le premier zero de votre N°"
                                            name="phone" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Niveau d'étude <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" name="degree">
                                            <option value="College">Bac</option>
                                            <option value="Associate 1">Bac + 1</option>
                                            <option value="Associate 2">Bac + 2</option>
                                            <option value="Bachelor">Licence</option>
                                            <option value="Master">Master</option>
                                            <option value="Doctoral">Doctorat</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Domaine de compétence <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Domain" name="domain"
                                            required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels mb-1">Présentez-vous <span class="text-danger">*</span><a
                                                href="!#" class="mx-3 text-link bi-cursor" data-bs-toggle="modal"
                                                data-bs-target="#myModal">voir-exemple</a></label>
                                        <textarea type="text" class="form-control" placeholder="Presentation" name="presentation" required></textarea>
                                    </div>
                                    <!-- ===============Modal =======================-->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Exemple</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body" style="text-align: justify; margin-right:10%">
                                                    <p>To enhance my professional skills, abilities and
                                                        knowledge in an organization that recognizes the value of hard
                                                        work and gives
                                                        me responsibilities and challenges while adding value,
                                                        through my knowledge, to that organization.</p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ===================End Modal===================== -->

                                    <div class="row mt-2 mb-3">
                                        <div class="col-md-6">
                                            <label class="labels">Github</label>
                                            <input type="url" class="form-control" placeholder="link github"
                                                name="github">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="labels">Twitter</label>
                                            <input type="url" class="form-control" placeholder="link twitter"
                                                name="twitter">
                                        </div>
                                    </div>

                                    <div class="row mt-2 mb-3">
                                        <div class="col-md-6">
                                            <label class="labels">Skype</label>
                                            <input type="url" class="form-control" placeholder="link skype" name="skype">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="labels">Linkedin</label>
                                            <input type="url" class="form-control" placeholder="link linkedin"
                                                name="linkedin">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="headerImage" class="form-label">Image d'entête <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file"
                                            accept="image/png, image/jpeg" name="headerImage" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="coverImage" class="form-label">Image de couverture</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file"
                                            accept="image/png, image/jpeg" name="coverImage">
                                    </div>
                                    <div class="mb-3">
                                        <label for="aboutImage" class="form-label">Image d'apropos</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file"
                                            accept="image/png, image/jpeg" name="aboutImage">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mb-4">
                                        <label class="labels">Pays <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Country" name="country"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">Ville <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="City" name="city" required>
                                    </div>
                                </div>
                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary" type="submit">Créer profile</button>
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
