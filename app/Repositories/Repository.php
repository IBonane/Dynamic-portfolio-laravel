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

    //=============================Person==========================//
    function addSuperUser($idSuperUser, $password): void
    {
        $hashPassword = Hash::make($password);
        DB::table('SuperUser')->insert([
            'id' => $idSuperUser,
            'hashPassword' => $hashPassword
        ]);
    }

    function getSuperUser(string $idSuperUser, string $password): array
    {
        $rows = DB::table('SuperUser')
            ->where('id', $idSuperUser)
            ->get();

        if (count($rows) == 0) {
            throw new Exception('utilisateur inconnu');
        }

        $rowUser = $rows[0];

        if (!(Hash::check($password, $rowUser->hashPassword))) {
            throw new Exception('utilisateur inconnu');
        }

        return ['id' => $rowUser->id];
    }

    function createPerson($firstname, $lastname, $birthday, $email, $phone, $degree, $country, $city, $headerImage, $coverImage, $aboutImage, $domain, $presentation, $github, $twitter, $skype, $linkedin, $idSuperUser): void
    {
        $verifyIfNoPerson = DB::table('Person')->get()->toArray();

        if (count($verifyIfNoPerson) != 0) {
            throw new Exception('Vous avez dejà créer une personne, impossible d\'en créer une deuxième');
        }

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
            'github' => $github,
            'twitter' => $twitter,
            'skype' => $skype,
            'linkedin' => $linkedin,
            'idSuperUser' => $idSuperUser

        ]);
    }

    function getPerson(): array
    {
        return DB::table('Person')->get()->toArray();
    }

    function updatePerson($firstname, $lastname, $birthday, $email, $phone, $degree, $country, $city, $headerImage, $coverImage, $aboutImage, $domain, $presentation, $github, $twitter, $skype, $linkedin, $idSuperUser): void
    {
        DB::table('Person')->where('idSuperUser', $idSuperUser)->update([
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
            'github' => $github,
            'twitter' => $twitter,
            'skype' => $skype,
            'linkedin' => $linkedin,
            'idSuperUser' => $idSuperUser

        ]);
    }

    function deletePerson($idSuperUser)
    {
        //CASCADING DELETE
        $idPerson = $this->getPerson()[0]->id;

        //Experiences
        $experiences = $this->getExperiences();
        if (count($experiences) != 0) {
            foreach ($experiences as $experience) {
                DB::table('Experiences')
                    ->where('idPerson', $idPerson)
                    ->where('id', $experience->id)->delete();
            }
        }

        //Formations
        $formations = $this->getFormations();
        if (count($formations) != 0) {
            foreach ($formations as $formation) {
                DB::table('Formations')
                    ->where('idPerson', $idPerson)
                    ->where('id', $formation->id)->delete();
            }
        }

        //Skills
        $skills = $this->getSkills();
        if (count($skills) != 0) {
            foreach ($skills as $skill) {
                DB::table('Skills')
                    ->where('idPerson', $idPerson)
                    ->where('id', $skill->id)->delete();
            }
        }

        //Certificates
        $certificates = $this->getCertificates();
        if (count($certificates) != 0) {
            foreach ($certificates as $certificate) {
                DB::table('Certificates')
                    ->where('idPerson', $idPerson)
                    ->where('id', $certificate->id)->delete();
            }
        }
        //delete person
        DB::table('Person')->where('idSuperUser', $idSuperUser)->delete();
    }
    //=============================End Person==========================//

    //=============================Experiences==========================//
    function addExperience($idPerson, $title, $beginDate, $endDate, $companyName, $country, $city, $descriptions): void
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

    function getExperienceById($idExperience): array
    {
        return DB::table('Experiences')->where('id', $idExperience)->get()->toArray();
    }

    function updateExperience($idExperience, $title, $beginDate, $endDate, $companyName, $country, $city, $descriptions): void
    {
        DB::table('Experiences')->where('id', $idExperience)->update([
            'title' => $title,
            'beginDate' => $beginDate,
            'endDate' => $endDate,
            'companyName' => $companyName,
            'country' => $country,
            'city' => $city,
            'descriptions' => $descriptions
        ]);
    }

    function deleteExperience($idExperience)
    {
        DB::table('Experiences')->where('id', $idExperience)->delete();
    }
    //=============================End Experiences==========================//

    //=============================Formations==========================//

    function addFormation($idPerson, $title, $beginDate, $endDate, $schoolName, $country, $city, $descriptions): void
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

    function getFormationById($idFormation): array
    {
        return DB::table('Formations')->where('id', $idFormation)->get()->toArray();
    }

    function updateFormation($idFormation, $title, $beginDate, $endDate, $schoolName, $country, $city, $descriptions): void
    {
        DB::table('Formations')->where('id', $idFormation)->update([
            'title' => $title,
            'beginDate' => $beginDate,
            'endDate' => $endDate,
            'schoolName' => $schoolName,
            'country' => $country,
            'city' => $city,
            'descriptions' => $descriptions
        ]);
    }

    function deleteFormation($idFormation)
    {
        DB::table('Formations')->where('id', $idFormation)->delete();
    }
    //=============================End Formations==========================//

    //=============================Skills==========================//
    function addSkill($idPerson, $title, $descriptions): void
    {
        DB::table('Skills')->insert([
            'idPerson' => $idPerson,
            'title' => $title,
            'descriptions' => $descriptions
        ]);
    }

    function getSkills(): array
    {
        return DB::table('Skills')->get()->toArray();
    }

    function getSkillById($idSkill): array
    {
        return DB::table('Skills')->where('id', $idSkill)->get()->toArray();
    }

    function updateSkill($idSkill, $title, $descriptions): void
    {
        DB::table('Skills')->where('id', $idSkill)->update([
            'title' => $title,
            'descriptions' => $descriptions
        ]);
    }

    function deleteSkill($idSkill)
    {
        DB::table('Skills')->where('id', $idSkill)->delete();
    }

    //=============================End Skills=================================//

    //================================Certificate==================================//
    function addCertificate($idPerson, $title, $receiptDate, $organizationName, $country, $city, $descriptions): void
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

    function getCertificates(): array
    {
        return DB::table('Certificates')->get()->toArray();
    }

    function getCertificateById($idCertificate): array
    {
        return DB::table('Certificates')->where('id', $idCertificate)->get()->toArray();
    }

    function updateCertificate($idCertificate, $title, $receiptDate, $organizationName, $country, $city, $descriptions)
    {
        DB::table('Certificates')->where('id', $idCertificate)->update([
            'title' => $title,
            'receiptDate' => $receiptDate,
            'organizationName' => $organizationName,
            'country' => $country,
            'city' => $city,
            'descriptions' => $descriptions
        ]);
    }

    function deleteCertificate($idCertificate)
    {
        DB::table('Certificates')->where('id', $idCertificate)->delete();
    }

    //=============================End Certificate============================================//
}
