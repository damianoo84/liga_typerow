<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Type;

class TypesFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 3;
    }

    public function load(ObjectManager $manager) {
        
        $usersList = array(
            'Damian',
            'Wojtek',
            'Mateusz',
            'Marcin',
            'Krystian',
            'Piotrek 1',
            'Tomek',
            'Michał',
            'Adam 1',
            'Przemek 1'
        );
        
        $goals = array(0, 1, 2);
            for($i=1;$i<=10;$i++){
                for($j=0;$j<10;$j++){
                    $Type = new Type();
                    $Type->setHostType(array_rand($goals))
                            ->setGuestType(array_rand($goals))
                            ->setUser($this->getReference('user-'.$usersList[$j]))
                            ->setMeet($this->getReference('meet-Mecz '.$i))
                            ;
                    $manager->persist($Type);
                }
            }
        $manager->flush();   
    }
}