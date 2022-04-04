<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Carbon\Carbon; // Include Class in COntroller
use Exception;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->repository = new Repository();
    }

    public function home()
    {
        //person
        $person = [];
        $age = "";
        $phone = "";
        $personArray = $this->repository->getPerson();
        if (count($personArray) != 0) {

            $person = $personArray[0];
            $age = Carbon::parse($person->birthday)->diff(Carbon::now())->y;

            $phone = str_replace(' ', '', $person->phone);

            //dd($age, $phone);
        }

        //Experiences
        $experiences = $this->repository->getExperiences();

        //Formations
        $formations = $this->repository->getFormations();

        //Skills
        $skills = $this->repository->getSkills();

        //Certificates
        $certificates = $this->repository->getCertificates();

        //dd($certificates);

        return view('home', [
            'person' => $person,
            'age' => $age,
            'phone' => $phone,
            'experiences' => $experiences,
            'formations' => $formations,
            'skills' => $skills,
            'certificates' => $certificates
        ]);
    }

    //Connection 
    public function loginShow()
    {
        if (!request()->session()->has('user')) {
            return view('admin');
        }
        return redirect()->route('list.show');
    }

    public function login()
    {
        $rules = [
            'id' => ['required', 'exists:superuser,id'],
            'password' => ['required']
        ];

        $messages = [
            'id.required' => "Vous devez saisir l'id de l'admin.",
            'id.exists' => "Cet administrateur n'existe pas.",
            'password.required' => "Vous devez saisir un mot de passe.",
        ];

        $validatedData = request()->validate($rules, $messages);

        try {
            # lever une exception si le mot de passe de l'utilisateur n'est pas correct
            $user = $this->repository->getSuperUser($validatedData['id'], $validatedData['password']);

            # se souvenir de l'authentification de l'utilisateur
            request()->session()->put('user', $user);

            return redirect()->route('list');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors("Mot de passe incorrecte.");
        }
    }

    //Deconnexion
    public function logout()
    {
        request()->session()->forget('user');

        return redirect()->route('login.show');
    }

    public function showCreateProfil()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }
        return view('create_profil');
    }

    public function createProfil()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }

        $rules = [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'birthday' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'degree' => ['required'],
            'domain' => ['required'],
            'presentation' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            // 'headerImage' => ['required']
        ];

        $messages = [
            'firstname.required' => "Vous devez saisir votre prenom",
            'lastname.required' => "Entrer un nom de famille",
            'birthday.required' => "Entrer votre  date de naissance",
            'email.required' => "Entrer votre adresse mail",
            'phone.required' => "Entrer votre numéro de téléphone",
            'degree.required' => "Entrer votre niveau d'étude",
            'domain.required' => "Entrer votre domaine d'étude ou de travail",
            'presentation.required' => "Presentez vous brievement.",
            'country.required' => "Entrer votre pays de résidence",
            'city.required' => "Entrer votre ville de résidence.",
            //'headerImage.required' => "Entrer une photo d'entête."
        ];

        $validatedData = request()->validate($rules, $messages);

        $firstname = $validatedData['firstname'];
        $lastname = $validatedData['lastname'];
        $birthday = $validatedData['birthday'];
        $email = $validatedData['email'];
        $phone = $validatedData['phone'];
        $degree = $validatedData['degree'];
        $domain = $validatedData['domain'];
        $presentation = $validatedData['presentation'];
        $country = $validatedData['country'];
        $city = $validatedData['city'];
        // $headerImage = $validatedData['headerImage'];
        // $aboutImage = request()->input('aboutImage');
        // $coverImage = request()->input('coverImage');
        $idSuperUser = session()->get('user')['id'];

        //create unique filename image header and add new path image if is posible
        $headerImagePath = "";
        if (request()->headerImage == null) {
            $headerImagePath = "https://bootdey.com/img/Content/avatar/avatar7.png";
        } else {
            $filename = time() . '.' . request()->headerImage->extension();
            //put image into storage folder and get path
            $headerImagePath = request()->file('headerImage')->storeAs('PersonImages', $filename, 'public');
        }

        //create unique filename image about and add new path image if is posible
        $aboutImagePath = "";
        if (request()->aboutImage == null) {
            $aboutImagePath = "default/about.jpg";
        } else {
            $filename = time() . '.' . request()->aboutImage->extension();
            //put image into storage folder and get path
            $aboutImagePath = request()->file('aboutImage')->storeAs('PersonImages', $filename, 'public');
        }

        //create unique filename image about and add new path image if is posible
        $coverImagePath = "";
        if (request()->coverImage == null) {
            $coverImagePath = "default/cover.jpg";
        } else {
            $filename = time() . '.' . request()->coverImage->extension();
            //put image into storage folder and get path
            $coverImagePath = request()->file('coverImage')->storeAs('PersonImages', $filename, 'public');
        }

        // dd($headerImagePath, $aboutImagePath, $coverImagePath);

        try {
            $this->repository->createPerson(
                $firstname,
                $lastname,
                $birthday,
                $email,
                $phone,
                $degree,
                $country,
                $city,
                $headerImagePath,
                $coverImagePath,
                $aboutImagePath,
                $domain,
                $presentation,
                $idSuperUser
            );
            return redirect()->route('list.show');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    public function addExperience()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }
        return view('create_experience');
    }

    public function addCompetence()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }
        return view('create_competence');
    }

    public function addFormation()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }
        return view('create_formation');
    }

    public function addCertification()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }
        return view('create_certification');
    }

    public function list()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }

        //person
        $person = [];
        $personArray = $this->repository->getPerson();
        if (count($personArray) != 0) {

            $name = $personArray[0]->firstname;
        }
        return view('list', ['name'=>$name]);
    }
}
