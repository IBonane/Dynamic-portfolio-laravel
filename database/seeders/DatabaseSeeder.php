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

        //Admin
        $this->repository->addSuperUser('#!WinoDjimba!AO@#', '!MeineProfil4516!');
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
        $idSuperUser = "#!WinoDjimba!AO@#";
        $domain = "Computer Science";
        $github = "https://github.com/IBonane";
        $twitter = "";
        $skype ="";
        $linkedin ="https://www.linkedin.com/in/bonane";
        $presentation = "To enhance my professional skills, abilities and 
                        knowledge in an organization that recognizes the value of hard work and gives 
                        me responsibilities and challenges while adding value, 
                        through my knowledge, to that organization.";
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
            $github,
            $twitter,
            $skype,
            $linkedin,
            $idSuperUser
        );

        // //same person
        // $idPerson = 1;

        // //addExperience1
        // $titleExp = "Senior graphic design specialist";
        // $beginDateExp = "04/03/2021";
        // $endDateExp = "04/03/2021";
        // $companyName = "Sogefi group";
        // $countryExp = "France";
        // $cityExp = "Orbey";
        // $descriptionsExp = "Lead in the design, development, and implementation of the graphic, layout, and production communication materials.;
        //             Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.;
        //             Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design.;
        //             Oversee the efficient use of production project budgets ranging from $2,000 - $25,000.";

        // $this->repository->addExperience($idPerson, $titleExp, $beginDateExp, $endDateExp, $companyName, $countryExp, $cityExp, $descriptionsExp);

        // //addExperience2
        // $titleExp = "Solar Technology";
        // $beginDateExp = "15/08/2017";
        // $endDateExp = "30/12/2017";
        // $companyName = "Solar Comcept";
        // $countryExp = "Burkina Faso";
        // $cityExp = "Ouagadougou";
        // $descriptionsExp = "Lead in the design, development, and implementation of the graphic, layout, and production communication materials.;
        //             Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.;
        //             Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design.;
        //             Oversee the efficient use of production project budgets ranging from $2,000 - $25,000.";

        // $this->repository->addExperience($idPerson, $titleExp, $beginDateExp, $endDateExp, $companyName, $countryExp, $cityExp, $descriptionsExp);


        // //addFormation
        // $titleForm = "Master of Thermal Engineering and Energy";
        // $beginDateForm = "04/03/2019";
        // $endDateForm = "03/09/2021";
        // $schoolName = "Bourgogne Franche-comte University";
        // $countryForm = "France";
        // $cityForm = "Belfort";
        // $descriptionsForm = "Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. 
        //                      Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend";
        // $this->repository->addFormation($idPerson, $titleForm, $beginDateForm, $endDateForm, $schoolName, $countryForm, $cityForm, $descriptionsForm);

        // //addskill1
        // $title = "Best practices";
        // $descriptions = "Object oriented approach (OOP);
        //                 Development in Agile mode;
        //                 TDD approach";
        // $this->repository->addSkill($idPerson, $title, $descriptions);

        // //addskill2
        // $title = "How to be";
        // $descriptions = "Adaptability;
        //                 Stress management;
        //                 Teamwork;
        //                 Ability to federate;
        //                 Communication skills;
        //                 Autonomy;
        //                 Ability to make decisions;
        //                 Sense of organization";
        // $this->repository->addSkill($idPerson, $title, $descriptions);

        // //addCertificate1
        // $title = "Full Django Training";
        // $receiptDate = "12/07/2021";
        // $organizationName = "Udemy";
        // $country = "France";
        // $city = "Kaysersberg";
        // $descriptions = "The above document certifies that Inoussa Djimbala BONANE has validated
        //                 the course La Formation Complète Django on 12/07/2021, taught by Thibault Houdon | Python
        //                 Trainer and Developer, Docstring | Online Python Training on Udemy. The certificate 
        //                 indicates that the participant has completed and validated the entire course. 
        //                 The course duration represents the total number of hours of video in the course 
        //                 at the most recent time the participant completed the course.";
        // $this->repository->addCertificate($idPerson, $title, $receiptDate, $organizationName, $country, $city, $descriptions);

        // //addCertificate2
        // $title = "Xamarin Forms Training";
        // $receiptDate = "25/05/2021";
        // $organizationName = "Udemy";
        // $country = "France";
        // $city = "Marseille";
        // $descriptions = "The above document certifies that Inoussa Djimbala BONANE has validated 
        //                 the course Mobile Application Developer | Full Training 2021 on 25/05/2021, taught by 
        //                 Jonathan Roux | Python - C# - iOS - Android on Udemy. The certificate indicates that 
        //                 the participant has completed and validated the entire course. The course duration 
        //                 represents the total number of hours of course video at the most recent time the 
        //                 participant completed the course.";
        // $this->repository->addCertificate($idPerson, $title, $receiptDate, $organizationName, $country, $city, $descriptions);


        // $this->repository->createPerson(
        //     'mick',
        //     'kil',
        //     '07/08/1995',
        //     'email@gmail.com',
        //     '+22607895456',
        //     'Master',
        //     'france',
        //     'marseille',
        //     '',
        //     '',
        //     '',
        //     'info',
        //     'salut c\'est moi',
        //     $idSuperUser
        // );
    }
}
