<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\DataFixtures\CategorieFixture;
use App\DataFixtures\ImageFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $products = [
            [
                'name' => 'T-shirt',
                'description' => 'T-shirt',
                'price' => 10,
                'category' => $this->getReference('T-shirts'),
                'images' => $this->getReference('Image_1'),
            ],
            [
                'name' => 'T-shirt',
                'description' => 'T-shirt',
                'price' => 10,
                'category' => $this->getReference('T-shirts'),
                'images' => $this->getReference('Image_2'),
            ],
            [
                'name' => 'T-shirt',
                'description' => 'T-shirt',
                'price' => 10,
                'category' => $this->getReference('T-shirts'),
                'images' => $this->getReference('Image_3'),
            ],
            [
                'name' => 'Pull',
                'description' => 'Pull',
                'price' => 10,
                'category' => $this->getReference('Pulls'),
                'images' => $this->getReference('Image_4'),
            ],
            [
                'name' => 'Pull',
                'description' => 'Pull',
                'price' => 10,
                'category' => $this->getReference('Pulls'),
                'images' => $this->getReference('Image_5'),
            ],
            [
                'name' => 'Pull',
                'description' => 'Pull',
                'price' => 10,
                'category' => $this->getReference('Pulls'),
                'images' => $this->getReference('Image_6'),
            ],
            [
                'name' => 'Sous-pull',
                'description' => 'Sous-pull',
                'price' => 10,
                'category' => $this->getReference('Sous-pulls'),
                'images' => $this->getReference('Image_7'),
            ],
            [
                'name' => 'Sous-pull',
                'description' => 'Sous-pull',
                'price' => 10,
                'category' => $this->getReference('Sous-pulls'),
                'images' => $this->getReference('Image_8'),
            ],

            [
                'name' => 'Sous-pull',
                'description' => 'Sous-pull',
                'price' => 10,
                'category' => $this->getReference('Sous-pulls'),
                'images' => $this->getReference('Image_9'),
            ],

            [
                'name' => 'Gilet',
                'description' => 'Gilet',
                'price' => 10,
                'category' => $this->getReference('Gilets'),
                'images' => $this->getReference('Image_10'),
            ],

            [
                'name' => 'Gilet',
                'description' => 'Gilet',
                'price' => 10,
                'category' => $this->getReference('Gilets'),
                'images' => $this->getReference('Image_11'),
            ],

            [
                'name' => 'Gilet',
                'description' => 'Gilet',
                'price' => 10,
                'category' => $this->getReference('Gilets'),
                'images' => $this->getReference('Image_12'),
            ],

            [
                'name' => 'Manteau',
                'description' => 'Manteau',
                'price' => 10,
                'category' => $this->getReference('Manteaux'),
                'images' => $this->getReference('Image_13'),
            ],

            [
                'name' => 'Manteau',
                'description' => 'Manteau',
                'price' => 10,
                'category' => $this->getReference('Manteaux'),
                'images' => $this->getReference('Image_14'),
            ],

            [
                'name' => 'Manteau',
                'description' => 'Manteau',
                'price' => 10,
                'category' => $this->getReference('Manteaux'),
                'images' => $this->getReference('Image_15'),
            ],

            [
                'name' => 'Veste',
                'description' => 'Veste',
                'price' => 10,
                'category' => $this->getReference('Vestes'),
                'images' => $this->getReference('Image_16'),
            ],

            [
                'name' => 'Veste',
                'description' => 'Veste',
                'price' => 10,
                'category' => $this->getReference('Vestes'),
                'images' => $this->getReference('Image_17'),
            ],

            [
                'name' => 'Veste',
                'description' => 'Veste',
                'price' => 10,
                'category' => $this->getReference('Vestes'),
                'images' => $this->getReference('Image_18'),
            ],

            [
                'name' => 'Jean',
                'description' => 'Jean',
                'price' => 10,
                'category' => $this->getReference('Jeans'),
                'images' => $this->getReference('Image_19'),
            ],

            [
                'name' => 'Jean',
                'description' => 'Jean',
                'price' => 10,
                'category' => $this->getReference('Jeans'),
                'images' => $this->getReference('Image_20'),
            ],

            [
                'name' => 'Jean',
                'description' => 'Jean',
                'price' => 10,
                'category' => $this->getReference('Jeans'),
                'images' => $this->getReference('Image_21'),
            ],

            [
                'name' => 'Pantalon',
                'description' => 'Pantalon',
                'price' => 10,
                'category' => $this->getReference('Pantalons'),
                'images' => $this->getReference('Image_22'),
            ],

            [
                'name' => 'Pantalon',
                'description' => 'Pantalon',
                'price' => 10,
                'category' => $this->getReference('Pantalons'),
                'images' => $this->getReference('Image_23'),
            ],

            [
                'name' => 'Pantalon',
                'description' => 'Pantalon',
                'price' => 10,
                'category' => $this->getReference('Pantalons'),
                'images' => $this->getReference('Image_24'),
            ],

            [
                'name' => 'Jogging',
                'description' => 'Jogging',
                'price' => 10,
                'category' => $this->getReference('Joggings'),
                'images' => $this->getReference('Image_25'),
            ],

            [
                'name' => 'Jogging',
                'description' => 'Jogging',
                'price' => 10,
                'category' => $this->getReference('Joggings'),
                'images' => $this->getReference('Image_26'),
            ],

            [
                'name' => 'Jogging',
                'description' => 'Jogging',
                'price' => 10,
                'category' => $this->getReference('Joggings'),
                'images' => $this->getReference('Image_27'),
            ],

            [
                'name' => 'Chaussure',
                'description' => 'Chaussure',
                'price' => 10,
                'category' => $this->getReference('Chaussures'),
                'images' => $this->getReference('Image_28'),
            ],

            [
                'name' => 'Chaussure',
                'description' => 'Chaussure',
                'price' => 10,
                'category' => $this->getReference('Chaussures'),
                'images' => $this->getReference('Image_29'),
            ],

            [
                'name' => 'Chaussure',
                'description' => 'Chaussure',
                'price' => 10,
                'category' => $this->getReference('Chaussures'),
                'images' => $this->getReference('Image_30'),
            ],
            [
                'name' => 'Chaussette',
                'description' => 'Chaussette',
                'price' => 10,
                'category' => $this->getReference('Chaussettes'),
                'images' => $this->getReference('Image_31'),
            ],

            [
                'name' => 'Chaussette',
                'description' => 'Chaussette',
                'price' => 10,
                'category' => $this->getReference('Chaussettes'),
                'images' => $this->getReference('Image_32'),
            ],

            [
                'name' => 'Chaussette',
                'description' => 'Chaussette',
                'price' => 10,
                'category' => $this->getReference('Chaussettes'),
                'images' => $this->getReference('Image_33'),
            ],

            [
                'name' => 'Sous-vêtement',
                'description' => 'Sous-vêtement',
                'price' => 10,
                'category' => $this->getReference('Sous-vêtements'),
                'images' => $this->getReference('Image_34'),
            ],

            [
                'name' => 'Sous-vêtement',
                'description' => 'Sous-vêtement',
                'price' => 10,
                'category' => $this->getReference('Sous-vêtements'),
                'images' => $this->getReference('Image_35'),
            ],

            [
                'name' => 'Sous-vêtement',
                'description' => 'Sous-vêtement',
                'price' => 10,
                'category' => $this->getReference('Sous-vêtements'),
                'images' => $this->getReference('Image_36'),
            ],



        ];
        foreach ($products as $key => $prod) {
            $product = new Product();
            $product->setTitre($prod['name']);
            $product->setDescription($prod['description']);
            $product->setPrix($prod['price']);
            $product->setCategorie($prod['category']);
            $product->addImage($prod['images']);
            $prod['category']->addAttachedProduct($product);
            $prod['images']->setAttachedProduct($product);
            $manager->persist($product);
            $this->addReference("Product_".($key+1), $product);
        }
        

        $manager->flush();
    }
}
