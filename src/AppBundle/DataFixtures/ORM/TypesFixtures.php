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
        
        $elements = array(0, 2, 4);
        $los = array_rand($elements);
        
            for($i=0;$i<40;$i++){
                for($j=0;$j<10;$j++){
                    $los = array_rand($elements);
                    $Type = new Type();
                    $Type->setHostType(0)
                            ->setGuestType(1)
                            ->setUser($this->getReference('user-'.$usersList[$j]))
                            ->setMeet($this->getReference('meet-Mecz '.$i))
                            ->setNumberOfPoints($elements[$los])
                            ;
                    $manager->persist($Type);
                }
            }
        
        $manager->flush();
        
    }
    
}