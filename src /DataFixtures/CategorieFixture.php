<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\DataFixtures\UserFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class CategorieFixture extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        
        $cats = [
            'T-shirts',
            'Pulls',
            'Sous-pulls',
            'Gilets',
            'Manteaux',
            'Vestes',
            'Jeans',
            'Pantalons',
            'Joggings',
            'Chaussures',
            'Chaussettes',
            'Sous-vêtements'
        ];

        foreach ($cats as $key => $cat) { // pour chaque catégorie
            $categorie = new Categorie();
            $categorie->setNom($cat);
            $manager->persist($categorie);
            $this->addReference($cat, $categorie);
        }

        $manager->flush();
    }
}
