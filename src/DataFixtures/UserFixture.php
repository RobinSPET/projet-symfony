<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture 
{
    public function load(ObjectManager $manager): void
    {
        $users = [
            [
                'username' => 'user1',
                'email' => 'user1@localhost.haha',
                'password' => '$2y$13$GUYrSnZAA1cPrzHFfOV3xOD7CpaCccSAEHzsTzNQtMHUMHd4GVDs.',
                'adresse' => '1 rue des cornichons, 57000, Metz',
            ],
            [
                'username' => 'user2',
                'email' => 'user2@localhost.haha',
                'password' => '$2y$13$GUYrSnZAA1cPrzHFfOV3xOD7CpaCccSAEHzsTzNQtMHUMHd4GVDs.',
                'adresse' => '1 rue des cornichons, 57000, Metz',
            ],
            [
                'username' => 'user3',
                'email' => 'user3@localhost.haha',
                'password' => '$2y$13$GUYrSnZAA1cPrzHFfOV3xOD7CpaCccSAEHzsTzNQtMHUMHd4GVDs.',
                'adresse' => '1 rue des cornichons, 57000, Metz',
            ]
        ];

        foreach ($users as $key => $user) { // pour chaque catégorie
            $account = new User();
            $account->setUsername($user['username']);
            $account->setEmail($user['email']);
            $account->setPassword($user['password']);
            $account->setAdresse($user['adresse']);
            $this->addReference("User_".($key+1), $account);
            $manager->persist($account);
        }

        $manager->flush();
    }
}
