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
            'Piotrek3',
            'Kuba',
            'Wojtek',
            'Marcin',
            'Krystian',
            'Piotrek1',
            'Przemek2',
            'Arek',
            'Mateusz',
            'Damian'
        );
        
        $goals = array(0,1,2);
        $points = array(0,2,4);
        
        foreach ($usersList as $user){
            for($i=1;$i<=10;$i++){
                $Type = new Type();
                $Type->setHostType($goals[array_rand($goals)])
                     ->setGuestType($goals[array_rand($goals)])
                     ->setUser($this->getReference('user-'.$user))
                     ->setMeet($this->getReference('meet-Mecz '.$i))
//                     ->setNumberOfPoints($points[array_rand($points)])
                    ;
                $manager->persist($Type);
//                var_dump($Type->getNumberOfPoints());
                
            }
        }
            
//        $manager->flush();   
    }
}