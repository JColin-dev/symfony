<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $muffin = new Produit();
        $muffin->setDesignation("Muffin")
            ->setDescription("Un délicieux muffin au chocolat")
            ->setPrix(3.5);

        $manager->persist($muffin);

        for ($i = 0; $i < 100; $i++) {
        $produit = new Produit();
        $produit->setDesignation("produit" . $i)
            ->setDescription("Un délicieux produit aux fruits" .$i)
            ->setPrix($i);

        $manager->persist($produit);
        }

        $manager->flush();

        
    }
}
