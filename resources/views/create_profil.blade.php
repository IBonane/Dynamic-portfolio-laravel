@extends('admin')

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
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label class="labels" for="firstname">Prenom</label>
                                        <input type="text" class="form-control" placeholder="First name" name="firstname">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="labels" for="lastname">Nom</label>
                                        <input type="text" class="form-control" placeholder="Last name" name="lastname">
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Date de naissance</label>
                                        <input type="date" class="form-control" placeholder="Birthday" name="birthday">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Contact</label>
                                        <input type="text" class="form-control" placeholder="Phone number" name="phone">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Niveau d'étude</label>
                                        <select class="form-select" name="degree">
                                            <option value="College">Bac</option>
                                            <option value="Associate">Bac + 1</option>
                                            <option value="Associate">Bac + 2</option>
                                            <option value="Bachelor">Licence</option>
                                            <option value="Master">Master</option>
                                            <option value="Doctoral">Doctorat</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Domaine de compétence</label>
                                        <input type="text" class="form-control" placeholder="Domain" name="domain">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels mb-1">Présentez-vous<a href="!#"
                                                class="mx-3 text-link bi-cursor" data-bs-toggle="modal"
                                                data-bs-target="#myModal">voir-exemple</a></label>
                                        <textarea type="text" class="form-control" placeholder="Presentation" name="presentation"></textarea>
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
                                    <div class="mb-3">
                                        <label for="headerImage" class="form-label">Image d'entête</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file"
                                            accept="image/png, image/jpeg" name="headerImage">
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
                                        <label class="labels">Pays</label>
                                        <input type="text" class="form-control" placeholder="Country" name="country">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">Ville</label>
                                        <input type="text" class="form-control" placeholder="City" name="city">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="labels">Mot de passe</label>
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="labels">confirmation du mot de passe</label>
                                        <input type="password" class="form-control" placeholder="PasswordConfirm"
                                            name="passwordConfirm">
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
