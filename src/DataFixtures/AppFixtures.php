<?php

namespace App\DataFixtures;

use App\Entity\Manga;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manga = new Manga();
        $manga->setNom("One Piece");
        $manga->setCategorie("Aventure");
        $manga->setDescription("blblblbl");
        $manager->persist($manga);

        $manager->flush();
    }
}
