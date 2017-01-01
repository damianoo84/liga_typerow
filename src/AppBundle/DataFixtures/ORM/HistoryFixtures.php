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
            'Sezon 1' => array(
                'Wojtek'=>   array(14,8,16,10,22,12,14,4,18,4,6,16,14,8,6),
                'Tomek'=>    array(12,4,8,10,20,14,12,4,4,10,10,12,18,12,10),
                'Mateusz'=>  array(6,18,14,8,12,6,6,10,14,14,10,6,14,6,10),
                'Damian'=>   array(12,8,2,12,8,12,10,2,10,16,6,14,14,6,14),
                'Krystian'=> array(12,6,8,8,14,14,14,6,14,4,6,14,8,8,6),
                'Piotrek 1'=>array(8,8,10,10,12,8,12,6,12,10,8,14,10,6,8),
                'Adam 1'=>   array(12,6,8,8,20,12,10,4,6,6,6,18,10,8,8),
            ),
            'Sezon 2' => array(
                'Wojtek'=>   array(10,16,24,6,12,12,10,2,10,16,14,12,18,12,16),
                'Łukasz'=>   array(8,10,6,4,16,16,8,10,12,20,18,10,18,16,14),
                'Adam 1'=>   array(10,20,12,8,14,14,8,10,8,12,16,18,18,6,12),
                'Michał'=>   array(6,8,14,12,8,16,8,10,10,10,20,10,16,20,14),
                'Przemek 1'=>   array(8,16,6,6,14,10,8,8,16,20,12,12,18,14,12),
                'Piotrek 1'=>   array(6,24,10,6,8,10,10,6,16,12,6,14,18,14,14),
                'Mateusz'=>   array(8,16,6,8,16,10,6,6,10,16,10,20,16,16,10),
                'Krystian'=>   array(8,12,6,2,8,14,14,2,16,14,12,12,18,12,16),
                'Marcin'=>   array(6,18,10,8,6,16,2,2,12,16,12,12,14,8,16),
                'Damian'=>   array(8,12,10,2,10,6,12,4,8,10,18,12,14,10,14),
            ),
            'Sezon 3' => array(
                'Marcin'=>   array(18,18,14,20,10,14,12,16,10,12,10,10,8,14,18),
                'Łukasz'=>   array(10,20,10,16,12,18,16,12,12,14,8,12,14,12,14),
                'Piotrek 1'=>   array(14,18,16,16,6,10,16,10,8,16,4,16,18,10,14),
                'Krystian'=>   array(16,16,20,14,8,10,14,18,6,16,6,8,12,8,14),
                'Tomek'=>   array(10,22,14,18,8,14,18,10,10,4,8,18,10,10,12),
                'Mateusz'=>   array(16,18,16,18,16,12,14,4,10,10,4,12,20,6,8),
                'Damian'=>   array(14,16,22,8,8,12,8,14,16,12,4,14,12,6,14),
                'Adam 1'=>   array(14,14,22,14,8,10,10,10,16,12,6,10,10,8,14),
                'Michał'=>   array(14,16,14,18,6,16,20,6,8,12,8,8,6,6,14),
                'Piotrek 2'=>   array(16,16,12,20,16,6,0,16,10,12,6,10,6,8,14),
            ),
            'Sezon 4' => array(
                'Piotrek 1'=>   array(16,12,6,8,10,6,8,22,14,16,26,12,6,14,16),
                'Damian'=>   array(16,14,14,10,12,6,18,10,10,16,18,16,10,6,6),
                'Kuba'=>   array(10,14,16,12,10,12,10,14,10,16,18,18,8,4,10),
                'Mateusz'=>   array(20,14,18,8,4,8,16,12,10,10,10,16,10,8,8),
                'Piotrek 2'=>   array(8,18,8,8,12,4,14,10,8,10,18,18,4,6,14),
                'Michał'=>   array(12,10,18,8,4,6,18,20,12,12,12,14,6,4,2),
                'Marcin'=>   array(12,8,6,10,6,4,16,14,10,14,12,18,6,10,6),
                'Wojtek'=>   array(12,12,12,10,10,12,18,14,10,12,6,12,2,4,2),
                'Krystian'=>   array(4,8,16,6,18,8,12,20,2,10,14,10,6,8,4),
                'Adam 1'=>   array(12,12,12,8,6,8,8,12,6,14,4,20,10,4,8),
            ),
            'Sezon 5' => array(
                'Łukasz'=>   array(18,20,16,18,10,18,10,20,16,14,12,8,20,12,12),
                'Krystian'=>   array(16,22,10,14,10,22,14,18,14,18,12,12,20,6,12),
                'Piotrek 1'=>   array(16,16,10,18,10,20,8,22,14,10,10,10,18,10,12),
                'Kuba'=>   array(12,14,10,20,14,20,12,10,18,12,6,8,18,8,20),
                'Damian'=>   array(8,16,16,16,6,20,10,22,14,10,12,8,18,8,16),
                'Marcin'=>   array(16,12,16,10,8,12,16,18,22,8,8,14,14,6,12),
                'Michał'=>   array(8,20,12,6,10,16,12,20,16,8,8,12,18,12,14),
                'Adam 1'=>   array(8,0,10,16,4,16,10,20,12,10,12,10,18,8,6),
                'Mateusz'=>   array(8,14,12,14,12,16,18,16,16,16,0,10,0,6,0),
                'Wojtek'=>   array(14,0,20,10,12,20,14,16,18,16,0,10,0,0,0),
            ),
            'Sezon 6' => array(
                'Krystian'=>   array(14,6,10,14,12,18,8,18,16,14,18,8,12,10,6),
                'Przemek 2'=>   array(16,10,12,8,12,16,6,16,12,10,24,4,10,14,8),
                'Damian'=>   array(10,10,12,12,18,18,8,10,8,16,10,8,18,6,12),
                'Łukasz'=>   array(10,6,20,12,12,10,4,18,14,12,12,8,18,10,6),
                'Piotrek 1'=>   array(12,10,10,12,8,14,10,22,10,12,12,6,20,6,8),
                'Wojtek'=>   array(12,14,16,10,14,18,12,14,10,12,10,4,14,10,0),
                'Adam 2'=>   array(8,8,10,8,12,10,4,8,10,16,20,6,22,10,8),
                'Kuba'=>   array(10,12,8,12,10,18,8,10,10,16,10,6,8,8,8),
                'Marcin'=>   array(12,8,8,12,14,16,6,20,8,10,8,8,14,0,6),
            ),
            'Sezon 7' => array(
                'Wojtek'=>   array(24,8,14,12,10,8,12,10,18,14,18,12,16,18,4),
                'Piotrek 1'=>   array(16,8,18,12,14,4,14,12,18,12,14,14,22,10,4),
                'Krystian'=>   array(14,10,20,12,10,6,14,6,16,16,12,16,14,10,8),
                'Kuba'=>   array(18,2,8,16,10,6,14,10,22,14,20,10,12,14,6),
                'Damian'=>   array(10,8,14,10,12,4,14,14,16,10,16,10,14,14,12),
                'Przemek 2'=>   array(16,0,14,16,10,2,18,12,16,10,10,12,16,14,10),
                'Adam 2'=>   array(18,10,10,12,2,8,0,16,10,12,14,12,14,20,6),
                'Piotrek 3'=>   array(8,8,20,8,14,2,8,0,18,10,18,8,18,16,8),
                'Mateusz'=>   array(8,4,12,14,12,4,0,0,20,8,24,8,0,0,0),
                'Łukasz'=>   array(12,6,18,8,2,8,0,0,12,0,0,0,0,0,0),
            ),
            'Sezon 8' => array(
                'Marcin'=>   array(8,14,10,8,16,14,16,20,10,12,14,14,8,12,18),
                'Wojtek'=>   array(4,16,4,8,12,16,16,14,12,18,18,6,16,12,12),
                'Piotrek 1'=>   array(14,18,8,4,10,14,14,18,12,8,18,10,6,12,16),
                'Piotrek 3'=>   array(12,14,8,6,10,12,20,16,12,14,16,6,12,12,10),
                'Damian'=>   array(12,8,14,10,20,10,16,12,8,14,12,12,10,6,16),
                'Przemek 2'=>   array(6,18,10,6,14,16,12,14,8,20,12,12,8,6,12),
                'Krystian'=>   array(6,14,14,4,12,14,12,26,12,0,16,10,10,2,10),
                'Adam 2'=>   array(14,16,4,14,10,8,8,14,12,8,14,16,8,4,8),
                'Kuba'=>   array(6,12,6,6,10,14,8,6,12,14,10,10,4,8,10),
            ),
            'Sezon 9' => array(
                'Kuba'=>   array(16,6,8,14,10,12,10,18,26,8,14,14,6,10,10),
                'Piotrek 3'=>   array(16,8,10,14,10,12,4,20,18,14,14,10,8,6,10),
                'Piotrek 1'=>   array(16,6,12,12,6,14,8,12,16,18,10,18,8,14,4),
                'Marcin'=>   array(14,12,8,12,6,12,6,14,14,12,14,18,8,12,8),
                'Wojtek'=>   array(10,0,10,14,6,10,16,10,16,8,14,12,12,14,14),
                'Adam 2'=>   array(14,12,10,10,12,10,8,10,16,6,14,12,14,6,10),
                'Damian'=>   array(12,8,10,12,8,10,12,10,12,16,10,12,14,6,10),
                'Piotrek 2'=>   array(14,4,8,10,0,10,10,12,20,8,16,14,12,8,8),
                'Krystian'=>   array(16,0,8,12,2,12,16,8,20,16,16,10,2,8,6),
                'Przemek 2'=>   array(12,8,8,14,6,10,12,8,14,6,12,16,8,4,8),
            ),
            'Sezon 10' => array(
                'Piotrek 3'=>   array(10,20,18,10,18,8,12,10,12,10,18,16,22,14,6),
                'Łukasz'=>   array(10,18,10,10,14,8,18,10,18,8,18,12,14,12,6),
                'Mateusz'=>   array(16,12,18,8,8,14,18,12,8,6,16,10,16,12,8),
                'Wojtek'=>   array(18,16,10,6,12,14,14,10,10,4,12,12,16,14,6),
                'Marcin'=>   array(18,12,12,10,16,10,6,16,8,8,16,10,12,10,10),
                'Krystian'=>   array(14,10,6,10,10,8,20,12,16,12,16,12,12,10,6),
                'Przemek 2'=>   array(14,6,14,14,12,8,6,12,8,4,20,14,20,8,10),
                'Piotrek 1'=>   array(10,16,8,6,14,6,20,8,8,8,18,10,18,10,6),
                'Kuba'=>   array(14,8,10,12,14,12,10,12,12,4,20,10,14,4,8),
                'Damian'=>   array(12,8,16,8,10,8,12,10,14,2,20,8,18,10,4),
            ),
            'Sezon 11' => array(
                'Piotrek 1'=>   array(16,14,16,4,14,14,12,16,14,16,16,26,12,10,6),
                'Kuba'=>   array(8,16,12,10,10,16,14,16,14,14,18,18,8,12,10),
                'Wojtek'=>   array(12,6,16,14,14,20,12,16,8,12,14,26,10,6,6),
                'Damian'=>   array(14,16,6,10,18,12,12,14,12,16,10,22,8,8,6),
                'Łukasz'=>   array(14,14,6,8,14,12,18,16,10,12,14,22,10,8,6),
                'Piotrek 3'=>   array(12,8,10,16,16,14,10,14,10,12,12,18,14,8,8),
                'Przemek 2'=>   array(10,10,20,6,10,8,16,10,18,12,8,16,20,8,2),
                'Marcin'=>   array(10,12,10,8,14,16,14,8,8,12,6,12,10,14,14),
                'Krystian'=>   array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6),
                'Adam 2'=>   array(8,14,14,10,14,12,16,8,14,8,2,12,10,0,0)
             )  
        );
        
        $test = array(
            'Sezon 1' => array('Wojtek'=>array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6),'Mateusz'=>   array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6),'Damian'=>   array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6)),
            'Sezon 2' => array('Wojtek'=>array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6),'Mateusz'=>   array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6),'Damian'=>   array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6))
        );
        
        foreach ($test as $key => $value) {
                echo $key;
                echo "<br />"; 
            foreach ($test[$key] as $user => $u) {
                echo $user;
                echo "<br />"; 
                foreach ($test[$key][$user] as $k => $v) {
                    echo $v;
                    echo "<br />";
                }
            }
        }
        
        
//        foreach ($historyList as $historyDetails) {
//            echo $historyDetails;
//            echo "<br />"; 
//            foreach ($historyDetails as $key => $value){
//                echo $key;
//                echo "<br />"; 
//            }
//        }

    }
}
