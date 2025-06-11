<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Membre;

class MembreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // use French data

        $sexeOptions = ['Homme', 'Femme'];
        $situationOptions = ['Célibataire', 'Marié(e)', 'Divorcé(e)', 'Veuf(ve)'];

        for ($i = 0; $i < 15; $i++) {
            $membre = new Membre();
            $membre->setNom($faker->lastName());
            $membre->setPrenom($faker->firstName());
            $membre->setSexe($faker->randomElement($sexeOptions));
            $membre->setDateNaissance($faker->dateTimeBetween('-70 years', '-18 years'));
            $membre->setDateBapteme($faker->dateTimeBetween('-10 years', 'now'));
            $membre->setTelephone($faker->phoneNumber());
            $membre->setSituationMatrimoniale($faker->randomElement($situationOptions));
            $membre->setOccupation($faker->jobTitle());
            $membre->setObservation($faker->sentence(6));

            // You can skip kilasy or add logic if needed

            $manager->persist($membre);
        }

        $manager->flush();
    }
}
