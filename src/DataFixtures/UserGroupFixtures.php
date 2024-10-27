<?php

namespace App\DataFixtures;

use App\Entity\Group;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserGroupFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // Create 5 groups
        $groups = [];
        for ($i = 1; $i <= 5; $i++) {
            $group = new Group();
            $group->setName("Group ".$i)
                  ->setDescription($faker->catchPhrase);
            $manager->persist($group);
            $manager->flush();
            $groups[] = $group; 
        }

        // Create 20 users and assign them to random groups
        for ($i = 1; $i <= 50; $i++) {
            $user = new User();
            $user->setFirstName($faker->firstName)
                 ->setLastName($faker->lastName)
                 ->setEmail($faker->unique()->email)
                 ->setPhone($faker->phoneNumber)
                 ->setAge($faker->numberBetween(18, 70))
                 ->setType($faker->randomElement(['admin', 'user', 'guest']));

                 $randomGroupIndices = (array) array_rand($groups, mt_rand(1, 3)); // Ensure array result

                 foreach ($randomGroupIndices as $index) {
                     $user->addGroup($groups[$index]);
                 }

            $manager->persist($user);
        }

        $manager->flush();
    }
}
