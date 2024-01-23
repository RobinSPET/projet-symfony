<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\DataFixture\ProductFixture;
use App\DataFixture\UserFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class OrderFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $orders = [
            [
                [
                    $this->getReference('Product_1'),
                    $this->getReference('Product_3'),
                    $this->getReference('Product_4'),
                    $this->getReference('Product_5'),
                ],
                $this->getReference('User_1'),
                "Livré",
                "23/10/2022"
            ],
            [
                [
                    $this->getReference('Product_10'),
                    $this->getReference('Product_13'),
                    $this->getReference('Product_34'),
                ],
                $this->getReference('User_2'),
                "En attente de confirmation",
                "19/01/2024",
            ],
            [
                [
                    $this->getReference('Product_1'),
                    $this->getReference('Product_2'),
                    $this->getReference('Product_3'),
                    $this->getReference('Product_4'),
                    $this->getReference('Product_5'),
                    $this->getReference('Product_6'),
                    $this->getReference('Product_7'),
                    $this->getReference('Product_8'),
                    $this->getReference('Product_9'),
                    $this->getReference('Product_10'),
                    $this->getReference('Product_11'),
                    $this->getReference('Product_12'),
                    $this->getReference('Product_13'),
                    $this->getReference('Product_14'),
                    $this->getReference('Product_15'),
                    $this->getReference('Product_16'),
                    $this->getReference('Product_17'),
                    $this->getReference('Product_18'),
                    $this->getReference('Product_19'),
                    $this->getReference('Product_20'),
                    $this->getReference('Product_21'),
                    $this->getReference('Product_22'),
                    $this->getReference('Product_23'),
                    $this->getReference('Product_24'),
                    $this->getReference('Product_25'),
                    $this->getReference('Product_26'),
                    $this->getReference('Product_27'),
                    $this->getReference('Product_28'),
                    $this->getReference('Product_29'),
                    $this->getReference('Product_30'),
                    $this->getReference('Product_31'),
                    $this->getReference('Product_32'),
                    $this->getReference('Product_33'),
                    $this->getReference('Product_34'),
                    $this->getReference('Product_35'),
                    $this->getReference('Product_36'),
                ],
                $this->getReference('User_3'),
                "En cours de préparation",
                "19/01/2024",
            ]
        ];
        foreach ($orders as $key => $order) { // pour chaque catégorie
            $ord = new Order();
            foreach ($order[0] as $product) $ord->addProduct($product);
            $ord->setUser($order[1]);
            $ord->setStatus($order[2]);
            $ord->setDateOrder($order[3]);
            $order[1]->addOrder($ord);
            $manager->persist($ord);
            $this->addReference("Order_".key+1, $ord);
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
