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
            array('Wojtek'=>   array('ptk'=>array(14,8,16,10,22,12,14,4,18,4,6,16,14,8,6),'s'=>'Sezon 1')),
            array('Tomek'=>    array('ptk'=>array(12,4,8,10,20,14,12,4,4,10,10,12,18,12,10),'s'=>'Sezon 1')),
            array('Mateusz'=>  array('ptk'=>array(6,18,14,8,12,6,6,10,14,14,10,6,14,6,10),'s'=>'Sezon 1')),
            array('Damian'=>   array('ptk'=>array(12,8,2,12,8,12,10,2,10,16,6,14,14,6,14),'s'=>'Sezon 1')),
            array('Krystian'=> array('ptk'=>array(12,6,8,8,14,14,14,6,14,4,6,14,8,8,6),'s'=>'Sezon 1')),
            array('Piotrek 1'=>array('ptk'=>array(8,8,10,10,12,8,12,6,12,10,8,14,10,6,8),'s'=>'Sezon 1')),
            array('Adam 1'=>   array('ptk'=>array(12,6,8,8,20,12,10,4,6,6,6,18,10,8,8),'s'=>'Sezon 1')),
            
            array('Wojtek'=>   array('ptk'=>array(10,16,24,6,12,12,10,2,10,16,14,12,18,12,16),'s'=>'Sezon 2')),
            array('Łukasz'=>   array('ptk'=>array(8,10,6,4,16,16,8,10,12,20,18,10,18,16,14),'s'=>'Sezon 2')),
            array('Adam 1'=>   array('ptk'=>array(10,20,12,8,14,14,8,10,8,12,16,18,18,6,12),'s'=>'Sezon 2')),
            array('Michał'=>   array('ptk'=>array(6,8,14,12,8,16,8,10,10,10,20,10,16,20,14),'s'=>'Sezon 2')),
            array('Przemek 1'=>   array('ptk'=>array(8,16,6,6,14,10,8,8,16,20,12,12,18,14,12),'s'=>'Sezon 2')),
            array('Piotrek 1'=>   array('ptk'=>array(6,24,10,6,8,10,10,6,16,12,6,14,18,14,14),'s'=>'Sezon 2')),
            array('Mateusz'=>   array('ptk'=>array(8,16,6,8,16,10,6,6,10,16,10,20,16,16,10),'s'=>'Sezon 2')),
            array('Krystian'=>   array('ptk'=>array(8,12,6,2,8,14,14,2,16,14,12,12,18,12,16),'s'=>'Sezon 2')),
            array('Marcin'=>   array('ptk'=>array(6,18,10,8,6,16,2,2,12,16,12,12,14,8,16),'s'=>'Sezon 2')),
            array('Damian'=>   array('ptk'=>array(8,12,10,2,10,6,12,4,8,10,18,12,14,10,14),'s'=>'Sezon 2')),
            
            array('Marcin'=>   array('ptk'=>array(18,18,14,20,10,14,12,16,10,12,10,10,8,14,18),'s'=>'Sezon 3')),
            array('Łukasz'=>   array('ptk'=>array(10,20,10,16,12,18,16,12,12,14,8,12,14,12,14),'s'=>'Sezon 3')),
            array('Piotrek 1'=>   array('ptk'=>array(14,18,16,16,6,10,16,10,8,16,4,16,18,10,14),'s'=>'Sezon 3')),
            array('Krystian'=>   array('ptk'=>array(16,16,20,14,8,10,14,18,6,16,6,8,12,8,14),'s'=>'Sezon 3')),
            array('Tomek'=>   array('ptk'=>array(10,22,14,18,8,14,18,10,10,4,8,18,10,10,12),'s'=>'Sezon 3')),
            array('Mateusz'=>   array('ptk'=>array(16,18,16,18,16,12,14,4,10,10,4,12,20,6,8),'s'=>'Sezon 3')),
            array('Damian'=>   array('ptk'=>array(14,16,22,8,8,12,8,14,16,12,4,14,12,6,14),'s'=>'Sezon 3')),
            array('Adam 1'=>   array('ptk'=>array(14,14,22,14,8,10,10,10,16,12,6,10,10,8,14),'s'=>'Sezon 3')),
            array('Michał'=>   array('ptk'=>array(14,16,14,18,6,16,20,6,8,12,8,8,6,6,14),'s'=>'Sezon 3')),
            array('Piotrek 2'=>   array('ptk'=>array(16,16,12,20,16,6,0,16,10,12,6,10,6,8,14),'s'=>'Sezon 3')),
            
            array('Piotrek 1'=>   array('ptk'=>array(16,12,6,8,10,6,8,22,14,16,26,12,6,14,16),'s'=>'Sezon 4')),
            array('Damian'=>   array('ptk'=>array(16,14,14,10,12,6,18,10,10,16,18,16,10,6,6),'s'=>'Sezon 4')),
            array('Kuba'=>   array('ptk'=>array(10,14,16,12,10,12,10,14,10,16,18,18,8,4,10),'s'=>'Sezon 4')),
            array('Mateusz'=>   array('ptk'=>array(20,14,18,8,4,8,16,12,10,10,10,16,10,8,8),'s'=>'Sezon 4')),
            array('Piotrek 2'=>   array('ptk'=>array(8,18,8,8,12,4,14,10,8,10,18,18,4,6,14),'s'=>'Sezon 4')),
            array('Michał'=>   array('ptk'=>array(12,10,18,8,4,6,18,20,12,12,12,14,6,4,2),'s'=>'Sezon 4')),
            array('Marcin'=>   array('ptk'=>array(12,8,6,10,6,4,16,14,10,14,12,18,6,10,6),'s'=>'Sezon 4')),
            array('Wojtek'=>   array('ptk'=>array(12,12,12,10,10,12,18,14,10,12,6,12,2,4,2),'s'=>'Sezon 4')),
            array('Krystian'=>   array('ptk'=>array(4,8,16,6,18,8,12,20,2,10,14,10,6,8,4),'s'=>'Sezon 4')),
            array('Adam 1'=>   array('ptk'=>array(12,12,12,8,6,8,8,12,6,14,4,20,10,4,8),'s'=>'Sezon 4')),
            
            array('Łukasz'=>   array('ptk'=>array(18,20,16,18,10,18,10,20,16,14,12,8,20,12,12),'s'=>'Sezon 5')),
            array('Krystian'=>   array('ptk'=>array(16,22,10,14,10,22,14,18,14,18,12,12,20,6,12),'s'=>'Sezon 5')),
            array('Piotrek 1'=>   array('ptk'=>array(16,16,10,18,10,20,8,22,14,10,10,10,18,10,12),'s'=>'Sezon 5')),
            array('Kuba'=>   array('ptk'=>array(12,14,10,20,14,20,12,10,18,12,6,8,18,8,20),'s'=>'Sezon 5')),
            array('Damian'=>   array('ptk'=>array(8,16,16,16,6,20,10,22,14,10,12,8,18,8,16),'s'=>'Sezon 5')),
            array('Marcin'=>   array('ptk'=>array(16,12,16,10,8,12,16,18,22,8,8,14,14,6,12),'s'=>'Sezon 5')),
            array('Michał'=>   array('ptk'=>array(8,20,12,6,10,16,12,20,16,8,8,12,18,12,14),'s'=>'Sezon 5')),
            array('Adam 1'=>   array('ptk'=>array(8,0,10,16,4,16,10,20,12,10,12,10,18,8,6),'s'=>'Sezon 5')),
            array('Mateusz'=>   array('ptk'=>array(8,14,12,14,12,16,18,16,16,16,0,10,0,6,0),'s'=>'Sezon 5')),
            array('Wojtek'=>   array('ptk'=>array(14,0,20,10,12,20,14,16,18,16,0,10,0,0,0),'s'=>'Sezon 5')),
            
            array('Krystian'=>   array('ptk'=>array(14,6,10,14,12,18,8,18,16,14,18,8,12,10,6),'s'=>'Sezon 6')),
            array('Przemek 2'=>   array('ptk'=>array(16,10,12,8,12,16,6,16,12,10,24,4,10,14,8),'s'=>'Sezon 6')),
            array('Damian'=>   array('ptk'=>array(10,10,12,12,18,18,8,10,8,16,10,8,18,6,12),'s'=>'Sezon 6')),
            array('Łukasz'=>   array('ptk'=>array(10,6,20,12,12,10,4,18,14,12,12,8,18,10,6),'s'=>'Sezon 6')),
            array('Piotrek 1'=>   array('ptk'=>array(12,10,10,12,8,14,10,22,10,12,12,6,20,6,8),'s'=>'Sezon 6')),
            array('Wojtek'=>   array('ptk'=>array(12,14,16,10,14,18,12,14,10,12,10,4,14,10,0),'s'=>'Sezon 6')),
            array('Adam 2'=>   array('ptk'=>array(8,8,10,8,12,10,4,8,10,16,20,6,22,10,8),'s'=>'Sezon 6')),
            array('Kuba'=>   array('ptk'=>array(10,12,8,12,10,18,8,10,10,16,10,6,8,8,8),'s'=>'Sezon 6')),
            array('Marcin'=>   array('ptk'=>array(12,8,8,12,14,16,6,20,8,10,8,8,14,0,6),'s'=>'Sezon 6')),
        
            array('Wojtek'=>   array('ptk'=>array(24,8,14,12,10,8,12,10,18,14,18,12,16,18,4),'s'=>'Sezon 7')),
            array('Piotrek 1'=>   array('ptk'=>array(16,8,18,12,14,4,14,12,18,12,14,14,22,10,4),'s'=>'Sezon 7')),
            array('Krystian'=>   array('ptk'=>array(14,10,20,12,10,6,14,6,16,16,12,16,14,10,8),'s'=>'Sezon 7')),
            array('Kuba'=>   array('ptk'=>array(18,2,8,16,10,6,14,10,22,14,20,10,12,14,6),'s'=>'Sezon 7')),
            array('Damian'=>   array('ptk'=>array(10,8,14,10,12,4,14,14,16,10,16,10,14,14,12),'s'=>'Sezon 7')),
            array('Przemek 2'=>   array('ptk'=>array(16,0,14,16,10,2,18,12,16,10,10,12,16,14,10),'s'=>'Sezon 7')),
            array('Adam 2'=>   array('ptk'=>array(18,10,10,12,2,8,0,16,10,12,14,12,14,20,6),'s'=>'Sezon 7')),
            array('Piotrek 3'=>   array('ptk'=>array(8,8,20,8,14,2,8,0,18,10,18,8,18,16,8),'s'=>'Sezon 7')),
            array('Mateusz'=>   array('ptk'=>array(8,4,12,14,12,4,0,0,20,8,24,8,0,0,0),'s'=>'Sezon 7')),
            array('Łukasz'=>   array('ptk'=>array(12,6,18,8,2,8,0,0,12,0,0,0,0,0,0),'s'=>'Sezon 7')),
            
            array('Marcin'=>   array('ptk'=>array(8,14,10,8,16,14,16,20,10,12,14,14,8,12,18),'s'=>'Sezon 8')),
            array('Wojtek'=>   array('ptk'=>array(4,16,4,8,12,16,16,14,12,18,18,6,16,12,12),'s'=>'Sezon 8')),
            array('Piotrek 1'=>   array('ptk'=>array(14,18,8,4,10,14,14,18,12,8,18,10,6,12,16),'s'=>'Sezon 8')),
            array('Piotrek 3'=>   array('ptk'=>array(12,14,8,6,10,12,20,16,12,14,16,6,12,12,10),'s'=>'Sezon 8')),
            array('Damian'=>   array('ptk'=>array(12,8,14,10,20,10,16,12,8,14,12,12,10,6,16),'s'=>'Sezon 8')),
            array('Przemek 2'=>   array('ptk'=>array(6,18,10,6,14,16,12,14,8,20,12,12,8,6,12),'s'=>'Sezon 8')),
            array('Krystian'=>   array('ptk'=>array(6,14,14,4,12,14,12,26,12,0,16,10,10,2,10),'s'=>'Sezon 8')),
            array('Adam 2'=>   array('ptk'=>array(14,16,4,14,10,8,8,14,12,8,14,16,8,4,8),'s'=>'Sezon 8')),
            array('Kuba'=>   array('ptk'=>array(6,12,6,6,10,14,8,6,12,14,10,10,4,8,10),'s'=>'Sezon 8')),
       
            array('Kuba'=>   array('ptk'=>array(16,6,8,14,10,12,10,18,26,8,14,14,6,10,10),'s'=>'Sezon 9')),
            array('Piotrek 3'=>   array('ptk'=>array(16,8,10,14,10,12,4,20,18,14,14,10,8,6,10),'s'=>'Sezon 9')),
            array('Piotrek 1'=>   array('ptk'=>array(16,6,12,12,6,14,8,12,16,18,10,18,8,14,4),'s'=>'Sezon 9')),
            array('Marcin'=>   array('ptk'=>array(14,12,8,12,6,12,6,14,14,12,14,18,8,12,8),'s'=>'Sezon 9')),
            array('Wojtek'=>   array('ptk'=>array(10,0,10,14,6,10,16,10,16,8,14,12,12,14,14),'s'=>'Sezon 9')),
            array('Adam 2'=>   array('ptk'=>array(14,12,10,10,12,10,8,10,16,6,14,12,14,6,10),'s'=>'Sezon 9')),
            array('Damian'=>   array('ptk'=>array(12,8,10,12,8,10,12,10,12,16,10,12,14,6,10),'s'=>'Sezon 9')),
            array('Piotrek 2'=>   array('ptk'=>array(14,4,8,10,0,10,10,12,20,8,16,14,12,8,8),'s'=>'Sezon 9')),
            array('Krystian'=>   array('ptk'=>array(16,0,8,12,2,12,16,8,20,16,16,10,2,8,6),'s'=>'Sezon 9')),
            array('Przemek 2'=>   array('ptk'=>array(12,8,8,14,6,10,12,8,14,6,12,16,8,4,8),'s'=>'Sezon 9')),
            
            array('Piotrek 3'=>   array('ptk'=>array(10,20,18,10,18,8,12,10,12,10,18,16,22,14,6),'s'=>'Sezon 10')),
            array('Łukasz'=>   array('ptk'=>array(10,18,10,10,14,8,18,10,18,8,18,12,14,12,6),'s'=>'Sezon 10')),
            array('Mateusz'=>   array('ptk'=>array(16,12,18,8,8,14,18,12,8,6,16,10,16,12,8),'s'=>'Sezon 10')),
            array('Wojtek'=>   array('ptk'=>array(18,16,10,6,12,14,14,10,10,4,12,12,16,14,6),'s'=>'Sezon 10')),
            array('Marcin'=>   array('ptk'=>array(18,12,12,10,16,10,6,16,8,8,16,10,12,10,10),'s'=>'Sezon 10')),
            array('Krystian'=>   array('ptk'=>array(14,10,6,10,10,8,20,12,16,12,16,12,12,10,6),'s'=>'Sezon 10')),
            array('Przemek 2'=>   array('ptk'=>array(14,6,14,14,12,8,6,12,8,4,20,14,20,8,10),'s'=>'Sezon 10')),
            array('Piotrek 1'=>   array('ptk'=>array(10,16,8,6,14,6,20,8,8,8,18,10,18,10,6),'s'=>'Sezon 10')),
            array('Kuba'=>   array('ptk'=>array(14,8,10,12,14,12,10,12,12,4,20,10,14,4,8),'s'=>'Sezon 10')),
            array('Damian'=>   array('ptk'=>array(12,8,16,8,10,8,12,10,14,2,20,8,18,10,4),'s'=>'Sezon 10')),
            
            array('Piotrek 1'=>   array('ptk'=>array(16,14,16,4,14,14,12,16,14,16,16,26,12,10,6),'s'=>'Sezon 11')),
            array('Kuba'=>   array('ptk'=>array(8,16,12,10,10,16,14,16,14,14,18,18,8,12,10),'s'=>'Sezon 11')),
            array('Wojtek'=>   array('ptk'=>array(12,6,16,14,14,20,12,16,8,12,14,26,10,6,6),'s'=>'Sezon 11')),
            array('Damian'=>   array('ptk'=>array(14,16,6,10,18,12,12,14,12,16,10,22,8,8,6),'s'=>'Sezon 11')),
            array('Łukasz'=>   array('ptk'=>array(14,14,6,8,14,12,18,16,10,12,14,22,10,8,6),'s'=>'Sezon 11')),
            array('Piotrek 3'=>   array('ptk'=>array(12,8,10,16,16,14,10,14,10,12,12,18,14,8,8),'s'=>'Sezon 11')),
            array('Przemek 2'=>   array('ptk'=>array(10,10,20,6,10,8,16,10,18,12,8,16,20,8,2),'s'=>'Sezon 11')),
            array('Marcin'=>   array('ptk'=>array(10,12,10,8,14,16,14,8,8,12,6,12,10,14,14),'s'=>'Sezon 11')),
            array('Krystian'=>   array('ptk'=>array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6),'s'=>'Sezon 11')),
            array('Adam 2'=>   array('ptk'=>array(8,14,14,10,14,12,16,8,14,8,2,12,10,0,0),'s'=>'Sezon 11')),
               
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
