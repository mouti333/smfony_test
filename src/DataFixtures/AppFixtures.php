<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $User = new User();
        $User -> setNom("Dimassi");
        $User -> setPrenom("Moutia");

        $manager ->persist($User);

        $manager->flush();
    }
}
