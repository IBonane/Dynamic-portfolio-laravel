<?php

namespace App\Repositories;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Repository
{

    function createDatabase()
    {
        DB::unprepared(file_get_contents('database/build.sql'));
    }

    function createPerson($firstname, $lastname, $birthday, $email, $phone, $degree, $country, $city, $headerImage, $coverImage, $aboutImage, $domain, $presentation, $password):void
    {
        $hashPassword = Hash::make($password);

        DB::table('Person')->insert([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'birthday' => $birthday,
            'email' => $email,
            'phone' => $phone,
            'degree' => $degree,
            'country' => $country,
            'city' => $city,
            'headerImage' => $headerImage,
            'coverImage' => $coverImage,
            'aboutImage' => $aboutImage,
            'domain' => $domain,
            'presentation' => $presentation,
            'hashPassword' => $hashPassword

        ]);
    }

    function getPerson(): array
    {
        return DB::table('Person')->get()->toArray();
    }

    function updatePerson()
    {
        //todo
    }

    function removePerson()
    {
        //TODO
    }
/*    id INTEGER PRIMARY KEY AUTOINCREMENT,
    idPerson INTEGER NOT NULL,
    title VARCHAR(100),
    beginDate DATE,
    endDate DATE,
    schoolName VARCHAR(255),
    descriptionFormation TEXT,*/
    function addExperience($idPerson, $title, $beginDate, $endDate, $companyName, $country, $city, $descriptions):void
    {
        DB::table('Experiences')->insert([
            'idPerson' => $idPerson,
            'title' => $title,
            'beginDate' => $beginDate,
            'endDate' => $endDate,
            'companyName' => $companyName,
            'country' => $country,
            'city' => $city,
            'descriptions' => $descriptions
        ]);
    }

    function getExperiences(): array
    {
        return DB::table('Experiences')->get()->toArray();
    }

    function updateExperience($idExperience)
    {
        //todo
    }

    function removeExperience($idExperience)
    {
        //TODO
    }

    function addFormation($idPerson, $title, $beginDate, $endDate, $schoolName, $country, $city, $descriptions):void
    {
        DB::table('Formations')->insert([
            'idPerson' => $idPerson,
            'title' => $title,
            'beginDate' => $beginDate,
            'endDate' => $endDate,
            'schoolName' => $schoolName,
            'country' => $country,
            'city' => $city,
            'descriptions' => $descriptions
        ]);
    }

    function getFormations(): array
    {
        return DB::table('Formations')->get()->toArray();
    }

    function updateFormation($idFormation)
    {
        //todo
    }

    function removeFormation($idFormation)
    {
        //TODO
    }

    //addSkill
    function addSkill($idPerson, $title, $descriptions):void
    {
        DB::table('Skills')->insert([
            'idPerson' => $idPerson,
            'title' => $title,
            'descriptions' => $descriptions
        ]);
    }

    function getSkills():array
    {
        return DB::table('Skills')->get()->toArray();
    }

    function updateSkills($idSkill)
    {
        //todo
    }

    function removeSkills($idSkill)
    {
        //TODO
    }

    /*idPerson INTEGER NOT NULL,
    title VARCHAR(100),
    receiptDate DATE,
    organizationName VARCHAR(255),
    country VARCHAR(100),
    city VARCHAR(100),
    descriptions TEXT,*/
     //addCertificate
     function addCertificate($idPerson, $title, $receiptDate, $organizationName, $country, $city, $descriptions):void
     {
         DB::table('Certificates')->insert([
             'idPerson' => $idPerson,
             'title' => $title,
             'receiptDate' => $receiptDate,
             'organizationName' => $organizationName,
             'country' => $country,
             'city' => $city,
             'descriptions' => $descriptions
         ]);
     }
 
     function getCertificates():array
     {
         return DB::table('Certificates')->get()->toArray();
     }
 
     function updateCertificates($idCertificate)
     {
         //todo
     }
 
     function removeCertificates($idCertificate)
     {
         //TODO
     }
}
