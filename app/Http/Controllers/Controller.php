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
        $person = [];// $this->repository->getPerson()[0];

        $age =[];// Carbon::parse($person->birthday)->diff(Carbon::now())->y;

        $phone = [];//str_replace(' ', '', $person->phone);

        //Experiences
        $experiences =[];// $this->repository->getExperiences();

        //Formations
        $formations = [];//$this->repository->getFormations();

        //Skills
        $skills =[];// $this->repository->getSkills();

        //Certificates
        $certificates =[];// $this->repository->getCertificates();

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

    public function createProfil()
    {
        if (!request()->session()->has('user')) {
            return redirect()->route('login.show');
        }
        return view('create_profil');
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
        return view('list');
    }
}
