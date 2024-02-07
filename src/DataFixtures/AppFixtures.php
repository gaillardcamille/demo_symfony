<?php

namespace App\DataFixtures;

use App\Entity\Manga;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 15; $i++) {
            $manga[$i] = new Manga();
            $manga[$i]->setNom($faker->name());
            $manga[$i]->setCategorie($faker->word);
            $manga[$i]->setDescription($faker->sentence(20));
            $manager->persist($manga[$i]);
        }


        $manager->flush();
    }
}
