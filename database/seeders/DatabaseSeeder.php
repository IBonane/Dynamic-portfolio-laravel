<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\Repository;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        touch('database/database.sqlite');
        $this->repository = new Repository();
        $this->repository->createDatabase();

        //person
        $firstname = "Inoussa Djimbala";
        $lastname = "Bonane";
        $birthday = "07/07/1993";
        $email = "bonanedjimbala@gmail.com";
        $phone = "+33 6 10 04 44 59";
        $degree = "Master";
        $country = "France";
        $city = "Marseille";
        $headerImage = "default/profil.png";
        $coverImage = "default/cover.jpg";
        $aboutImage = "default/about.jpg";
        $password = "secret123";
        $domain = "informatique";
        $presentation = "Améliorer mes compétences professionnelles, 
                        mes capacités et mes connaissances dans une Organisation qui 
                        reconnaît la valeur du travail acharné et qui me confie des 
                        responsabilités et des défis Tout en apportant une valeur ajoutée, 
                        de par mes connaissances, à cette Organisation. ";
        // createPerson
        $this->repository->createPerson(
            $firstname,
            $lastname,
            $birthday,
            $email,
            $phone,
            $degree,
            $country,
            $city,
            $headerImage,
            $coverImage,
            $aboutImage,
            $domain,
            $presentation,
            $password
        );
    }
}
