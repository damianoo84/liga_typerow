<?php

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\History;


class HistoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 1;
    }
    
    public function load(ObjectManager $manager) {
        
        $historyList = array(
            array('Wojtek'=>   array('ptk'=>array(14,14,14,14,14,14,14,14,14,14,14,14,14,14,14),'s'=>'Sezon 1')),
            array('Tomek'=>    array('ptk'=>array(14,14,14,14,14,14,14,14,14,14,14,14,14,14,14),'s'=>'Sezon 1')),
            array('Mateusz'=>  array('ptk'=>array(14,14,14,14,14,14,14,14,14,14,14,14,14,14,14),'s'=>'Sezon 1')),
            array('Damian'=>   array('ptk'=>array(14,14,14,14,14,14,14,14,14,14,14,14,14,14,14),'s'=>'Sezon 1')),
            array('Krystian'=> array('ptk'=>array(14,14,14,14,14,14,14,14,14,14,14,14,14,14,14),'s'=>'Sezon 1')),
            array('Piotrek 1'=>array('ptk'=>array(14,14,14,14,14,14,14,14,14,14,14,14,14,14,14),'s'=>'Sezon 1')),
            array('Adam 1'=>   array('ptk'=>array(14,14,14,14,14,14,14,14,14,14,14,14,14,14,14),'s'=>'Sezon 1')),
        
            
        );
        
    
//        foreach ($historyList as $historyDetails) {
//            $History = new History();
//            $History->setNumOfPoints($historyDetails['ptk'])
//                    ->setUser($this->getReference('user-'.$historyDetails['n']))
//                    ->setMatchday($this->getReference('matchday-'.$historyDetails['n']))
//                    ->setSeason($this->getReference('season-'.$historyDetails['s']))
//                    ;
//            
//            $manager->persist($History);
//        }
//        
//        $manager->flush();
    }
}
