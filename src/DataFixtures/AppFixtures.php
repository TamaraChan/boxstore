<?php

namespace App\DataFixtures;

use App\Entity\Box;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getDataFixture() as $row) {
            $box = (new Box)
                ->setName($row['name'])
                ->setPrice((float)$row['price']);
            $manager->persist($box);
        }

        $manager->flush();
    }

    protected function getDataFixture()
    {
        return [
            [
                'name' => 'Custom',
                'price' => 0
            ],
            [
                'name' => 'Sparkle',
                'price' => 340
            ],
            [
                'name' => 'Nutella',
                'price' => 260
            ],
            [
                'name' => 'Man classic',
                'price' => 500
            ],
            [
                'name' => 'Blue Mode',
                'price' => 300
            ],
            [
                'name' => 'Jar',
                'price' => 380
            ],
            [
                'name' => 'Pinky',
                'price' => 320
            ],
            [
                'name' => 'Care mania',
                'price' => 230
            ],
            [
                'name' => 'For man 2.0',
                'price' => 380
            ],
            [
                'name' => 'In Love',
                'price' => 300
            ]
        ];
    }
}
