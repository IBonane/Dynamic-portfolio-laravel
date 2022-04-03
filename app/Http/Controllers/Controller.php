<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Carbon\Carbon; // Include Class in COntroller

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
        $person = $this->repository->getPerson()[0];

        $age = Carbon::parse($person->birthday)->diff(Carbon::now())->y;

        $phone = str_replace(' ', '', $person->phone);

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

    public function createProfil()
    {
        return view('create_profil');
    }

    public function addExperience()
    {
        return view('create_experience');
    }

    public function addCompetence()
    {
        return view('create_competence');
    }

    public function addFormation()
    {
        return view('create_formation');
    }

    public function addCertification()
    {
        return view('create_certification');
    }

    public function list()
    {
        return view('list');
    }
}
