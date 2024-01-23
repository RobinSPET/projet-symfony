<?php

namespace App\DataFixtures;

use App\Entity\Panier;
use App\DataFixture\ProductFixture;
use App\DataFixture\UserFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PanierFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $paniers = [
            [
                [
                    $this->getReference("Product_1"),
                    $this->getReference("Product_1"),
                    $this->getReference("Product_1"),
                    $this->getReference("Product_14")
                ],
                $this->getReference("User_1")
            ],
            [
                [
                    $this->getReference("Product_3"),
                    $this->getReference("Product_5"),
                    $this->getReference("Product_6"),
                    $this->getReference("Product_7"),
                    $this->getReference("Product_8"),
                    $this->getReference("Product_9"),
                    $this->getReference("Product_10"),
                ],
                $this->getReference("User_2")
            ],
            [
                [
                    $this->getReference("Product_1"),
                    $this->getReference("Product_2"),
                    $this->getReference("Product_3"),
                ],
                $this->getReference("User_3")
            ]
        ];

        foreach($paniers as $key => $panier) {
            $pan = new Panier();
            foreach ($panier[0] as $product) $pan->addProduct($product);
            $pan->setUser($panier[1]);
            $panier[1]->setPanier($pan);
            $manager->persist($pan);
            $this->addReference("Panier_".key+1, $pan);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixture::class,
            ProductFixture::class
        ];
    }
}
