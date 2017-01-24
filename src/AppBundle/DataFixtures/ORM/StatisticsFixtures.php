<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Statistic;


class StatisticsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 1;
    }
    
    public function load(ObjectManager $manager) {
        
        $statisticsList = array(
            array('n'=>'Wojtek',   'm2'=>58,'m4'=>14,'tP'=>172,'p'=>1, 'q'=> 15,'s'=>'Sezon 1'),      
            array('n'=>'Tomek',    'm2'=>46,'m4'=>17,'tP'=>160,'p'=>2, 'q'=> 15,'s'=>'Sezon 1'),
            array('n'=>'Mateusz',  'm2'=>43,'m4'=>17,'tP'=>154,'p'=>3, 'q'=> 15,'s'=>'Sezon 1'),
            array('n'=>'Damian',   'm2'=>51,'m4'=>11,'tP'=>146,'p'=>4, 'q'=> 15,'s'=>'Sezon 1'),
            array('n'=>'Krystian', 'm2'=>47,'m4'=>12,'tP'=>142,'p'=>5, 'q'=> 15,'s'=>'Sezon 1'),
            array('n'=>'Piotrek 1','m2'=>55,'m4'=>8, 'tP'=>142,'p'=>5, 'q'=> 15,'s'=>'Sezon 1'),
            array('n'=>'Adam 1',   'm2'=>59,'m4'=>6, 'tP'=>142,'p'=>5, 'q'=> 15,'s'=>'Sezon 1'),
            
            array('n'=>'Wojtek',   'm2'=>57,'m4'=>19,'tP'=>190,'p'=>1, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Łukasz',   'm2'=>57,'m4'=>18,'tP'=>186,'p'=>2, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Adam 1',   'm2'=>51,'m4'=>21,'tP'=>186,'p'=>2, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Michał',   'm2'=>53,'m4'=>19,'tP'=>182,'p'=>4, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Przemek 1','m2'=>64,'m4'=>13,'tP'=>180,'p'=>5, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Piotrek 1','m2'=>59,'m4'=>14,'tP'=>174,'p'=>6, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Mateusz',  'm2'=>69,'m4'=>9, 'tP'=>174,'p'=>6, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Krystian', 'm2'=>59,'m4'=>12,'tP'=>166,'p'=>8, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Marcin',   'm2'=>59,'m4'=>10,'tP'=>158,'p'=>9, 'q'=> 15,'s'=>'Sezon 2'),
            array('n'=>'Damian',   'm2'=>53,'m4'=>11,'tP'=>150,'p'=>10,'q'=> 15,'s'=>'Sezon 2'),
            
            array('n'=>'Marcin',   'm2'=>62,'m4'=>20,'tP'=>204,'p'=>1, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Łukasz',   'm2'=>56,'m4'=>22,'tP'=>200,'p'=>2, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Piotrek 1','m2'=>64,'m4'=>16,'tP'=>192,'p'=>3, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Krystian', 'm2'=>67,'m4'=>13,'tP'=>186,'p'=>4, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Tomek',    'm2'=>63,'m4'=>15,'tP'=>186,'p'=>4, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Mateusz',  'm2'=>52,'m4'=>20,'tP'=>184,'p'=>6, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Damian',   'm2'=>58,'m4'=>16,'tP'=>180,'p'=>7, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Adam 1',   'm2'=>61,'m4'=>14,'tP'=>178,'p'=>8, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Michał',   'm2'=>56,'m4'=>15,'tP'=>172,'p'=>9, 'q'=> 15,'s'=>'Sezon 3'),
            array('n'=>'Piotrek 2','m2'=>52,'m4'=>16,'tP'=>168,'p'=>10,'q'=> 14,'s'=>'Sezon 3'),
            
            array('n'=>'Piotrek 1','m2'=>50,'m4'=>23,'tP'=>192,'p'=>1, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Damian',   'm2'=>41,'m4'=>25,'tP'=>182,'p'=>2, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Kuba',     'm2'=>57,'m4'=>17,'tP'=>182,'p'=>2, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Mateusz',  'm2'=>46,'m4'=>20,'tP'=>172,'p'=>4, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Piotrek 2','m2'=>44,'m4'=>18,'tP'=>160,'p'=>5, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Michał',   'm2'=>45,'m4'=>17,'tP'=>158,'p'=>6, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Marcin',   'm2'=>52,'m4'=>12,'tP'=>152,'p'=>7, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Wojtek',   'm2'=>46,'m4'=>14,'tP'=>148,'p'=>8, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Krystian', 'm2'=>53,'m4'=>10,'tP'=>146,'p'=>9, 'q'=> 15,'s'=>'Sezon 4'),
            array('n'=>'Adam 1',   'm2'=>42,'m4'=>15,'tP'=>144,'p'=>10,'q'=> 15,'s'=>'Sezon 4'),

            array('n'=>'Łukasz',   'm2'=>74,'m4'=>19,'tP'=>224,'p'=>1, 'q'=> 15,'s'=>'Sezon 5'),
            array('n'=>'Krystian', 'm2'=>74,'m4'=>18,'tP'=>220,'p'=>2, 'q'=> 15,'s'=>'Sezon 5'),
            array('n'=>'Piotrek 1','m2'=>70,'m4'=>16,'tP'=>204,'p'=>3, 'q'=> 15,'s'=>'Sezon 5'),
            array('n'=>'Kuba',     'm2'=>73,'m4'=>14,'tP'=>202,'p'=>4, 'q'=> 15,'s'=>'Sezon 5'),
            array('n'=>'Damian',   'm2'=>68,'m4'=>16,'tP'=>200,'p'=>5, 'q'=> 15,'s'=>'Sezon 5'),
            array('n'=>'Marcin',   'm2'=>82,'m4'=>7, 'tP'=>192,'p'=>6, 'q'=> 15,'s'=>'Sezon 5'),
            array('n'=>'Michał',   'm2'=>68,'m4'=>14,'tP'=>192,'p'=>6, 'q'=> 15,'s'=>'Sezon 5'),
            array('n'=>'Adam 1',   'm2'=>54,'m4'=>13,'tP'=>160,'p'=>8, 'q'=> 14,'s'=>'Sezon 5'),
            array('n'=>'Mateusz',  'm2'=>53,'m4'=>13,'tP'=>158,'p'=>9, 'q'=> 12,'s'=>'Sezon 5'),
            array('n'=>'Wojtek',   'm2'=>45,'m4'=>15,'tP'=>150,'p'=>10,'q'=> 10,'s'=>'Sezon 5'),
        
            array('n'=>'Krystian', 'm2'=>50,'m4'=>21,'tP'=>184,'p'=>1, 'q'=> 15,'s'=>'Sezon 6'),
            array('n'=>'Przemek 2','m2'=>57,'m4'=>16,'tP'=>178,'p'=>2, 'q'=> 15,'s'=>'Sezon 6'),
            array('n'=>'Damian',   'm2'=>66,'m4'=>11,'tP'=>176,'p'=>3, 'q'=> 15,'s'=>'Sezon 6'),
            array('n'=>'Łukasz',   'm2'=>58,'m4'=>14,'tP'=>172,'p'=>4, 'q'=> 15,'s'=>'Sezon 6'),
            array('n'=>'Piotrek 1','m2'=>60,'m4'=>13,'tP'=>172,'p'=>4, 'q'=> 15,'s'=>'Sezon 6'),
            array('n'=>'Wojtek',   'm2'=>61,'m4'=>12,'tP'=>170,'p'=>6, 'q'=> 14,'s'=>'Sezon 6'),
            array('n'=>'Adam 2',   'm2'=>62,'m4'=>9, 'tP'=>160,'p'=>7, 'q'=> 15,'s'=>'Sezon 6'),
            array('n'=>'Kuba',     'm2'=>55,'m4'=>11,'tP'=>154,'p'=>8, 'q'=> 15,'s'=>'Sezon 6'),
            array('n'=>'Marcin',   'm2'=>61,'m4'=>7 ,'tP'=>150,'p'=>9, 'q'=> 14,'s'=>'Sezon 6'),
            
            array('n'=>'Wojtek',   'm2'=>69,'m4'=>15,'tP'=>198,'p'=>1, 'q'=> 15,'s'=>'Sezon 7'),
            array('n'=>'Piotrek 1','m2'=>64,'m4'=>16,'tP'=>192,'p'=>2, 'q'=> 15,'s'=>'Sezon 7'),
            array('n'=>'Krystian', 'm2'=>64,'m4'=>14,'tP'=>184,'p'=>3, 'q'=> 15,'s'=>'Sezon 7'),
            array('n'=>'Kuba',     'm2'=>69,'m4'=>11,'tP'=>182,'p'=>4, 'q'=> 15,'s'=>'Sezon 7'),
            array('n'=>'Damian',   'm2'=>59,'m4'=>15,'tP'=>178,'p'=>5, 'q'=> 15,'s'=>'Sezon 7'),
            array('n'=>'Przemek 2','m2'=>58,'m4'=>15,'tP'=>176,'p'=>6, 'q'=> 15,'s'=>'Sezon 7'),
            array('n'=>'Adam 2',   'm2'=>52,'m4'=>15,'tP'=>164,'p'=>7, 'q'=> 14,'s'=>'Sezon 7'),
            array('n'=>'Piotrek 3','m2'=>52,'m4'=>15,'tP'=>164,'p'=>7, 'q'=> 14,'s'=>'Sezon 7'),
            array('n'=>'Mateusz',  'm2'=>35,'m4'=>11,'tP'=>114,'p'=>9, 'q'=> 10,'s'=>'Sezon 7'),
            array('n'=>'Łukasz',   'm2'=>21,'m4'=>6, 'tP'=>66, 'p'=>10,'q'=> 7, 's'=>'Sezon 7'),
            
            array('n'=>'Marcin',   'm2'=>53,'m4'=>22,'tP'=>194,'p'=>1, 'q'=> 15,'s'=>'Sezon 8'),
            array('n'=>'Wojtek',   'm2'=>46,'m4'=>23,'tP'=>184,'p'=>2, 'q'=> 15,'s'=>'Sezon 8'),
            array('n'=>'Piotrek 1','m2'=>55,'m4'=>18,'tP'=>182,'p'=>3, 'q'=> 15,'s'=>'Sezon 8'),
            array('n'=>'Piotrek 3','m2'=>56,'m4'=>17,'tP'=>180,'p'=>4, 'q'=> 15,'s'=>'Sezon 8'),
            array('n'=>'Damian',   'm2'=>54,'m4'=>18,'tP'=>180,'p'=>4, 'q'=> 15,'s'=>'Sezon 8'),
            array('n'=>'Przemek 2','m2'=>45,'m4'=>21,'tP'=>174,'p'=>6, 'q'=> 15,'s'=>'Sezon 8'),
            array('n'=>'Krystian', 'm2'=>39,'m4'=>21,'tP'=>162,'p'=>7, 'q'=> 14,'s'=>'Sezon 8'),
            array('n'=>'Adam 2',   'm2'=>47,'m4'=>16,'tP'=>158,'p'=>8, 'q'=> 15,'s'=>'Sezon 8'),
            array('n'=>'Kuba',     'm2'=>48,'m4'=>10,'tP'=>136,'p'=>9, 'q'=> 15,'s'=>'Sezon 8'), 
          
            array('n'=>'Kuba',     'm2'=>53,'m4'=>19,'tP'=>182,'p'=>1, 'q'=> 15,'s'=>'Sezon 9'),
            array('n'=>'Piotrek 3','m2'=>55,'m4'=>16,'tP'=>174,'p'=>2, 'q'=> 15,'s'=>'Sezon 9'),
            array('n'=>'Piotrek 1','m2'=>59,'m4'=>14,'tP'=>174,'p'=>2, 'q'=> 15,'s'=>'Sezon 9'),
            array('n'=>'Marcin',   'm2'=>69,'m4'=>8, 'tP'=>170,'p'=>4, 'q'=> 15,'s'=>'Sezon 9'),
            array('n'=>'Wojtek',   'm2'=>51,'m4'=>16,'tP'=>166,'p'=>5, 'q'=> 14,'s'=>'Sezon 9'),
            array('n'=>'Adam 2',   'm2'=>58,'m4'=>12,'tP'=>164,'p'=>6, 'q'=> 15,'s'=>'Sezon 9'),
            array('n'=>'Damian',   'm2'=>51,'m4'=>15,'tP'=>162,'p'=>7, 'q'=> 15,'s'=>'Sezon 9'),
            array('n'=>'Piotrek 2','m2'=>57,'m4'=>10,'tP'=>154,'p'=>8, 'q'=> 14,'s'=>'Sezon 9'),
            array('n'=>'Krystian', 'm2'=>42,'m4'=>17,'tP'=>152,'p'=>9, 'q'=> 14,'s'=>'Sezon 9'),
            array('n'=>'Przemek 2','m2'=>51,'m4'=>11,'tP'=>146,'p'=>10,'q'=> 15,'s'=>'Sezon 9'),
            
            array('n'=>'Piotrek 3','m2'=>46,'m4'=>28,'tP'=>204,'p'=>1, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Łukasz',   'm2'=>69,'m4'=>12,'tP'=>186,'p'=>2, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Mateusz',  'm2'=>59,'m4'=>16,'tP'=>182,'p'=>3, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Wojtek',   'm2'=>55,'m4'=>16,'tP'=>174,'p'=>4, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Marcin',   'm2'=>57,'m4'=>15,'tP'=>174,'p'=>4, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Krystian', 'm2'=>49,'m4'=>19,'tP'=>174,'p'=>4, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Przemek 2','m2'=>59,'m4'=>13,'tP'=>170,'p'=>7, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Piotrek 1','m2'=>61,'m4'=>11,'tP'=>166,'p'=>8, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Kuba',     'm2'=>56,'m4'=>13,'tP'=>164,'p'=>9, 'q'=> 15,'s'=>'Sezon 10'),
            array('n'=>'Damian',   'm2'=>50,'m4'=>15,'tP'=>160,'p'=>10,'q'=> 15,'s'=>'Sezon 10'),
            
            array('n'=>'Piotrek 1','m2'=>59,'m4'=>22,'tP'=>206,'p'=>1, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Kuba',     'm2'=>58,'m4'=>20,'tP'=>196,'p'=>2, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Wojtek',   'm2'=>62,'m4'=>17,'tP'=>192,'p'=>3, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Damian',   'm2'=>48,'m4'=>22,'tP'=>184,'p'=>4, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Łukasz',   'm2'=>58,'m4'=>17,'tP'=>184,'p'=>4, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Piotrek 3','m2'=>63,'m4'=>14,'tP'=>182,'p'=>6, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Przemek 2','m2'=>57,'m4'=>15,'tP'=>174,'p'=>7, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Marcin',   'm2'=>58,'m4'=>13,'tP'=>168,'p'=>8, 'q'=> 15,'s'=>'Sezon 11'),
            array('n'=>'Krystian', 'm2'=>50,'m4'=>17,'tP'=>168,'p'=>8, 'q'=> 13,'s'=>'Sezon 11'),
            array('n'=>'Adam 2',   'm2'=>53,'m4'=>9, 'tP'=>142,'p'=>10,'q'=> 13,'s'=>'Sezon 11'),
        );
            
        
        foreach ($statisticsList as $statisticDetails => $stat) {
            $Statistic = new Statistic();
            $Statistic->setMatch2($stat['m2'])
                    ->setMatch4($stat['m4'])
                    ->setTotalPoints($stat['tP'])
                    ->setPosition($stat['p'])
                    ->setNumOfQue($stat['q'])
                    ->setUser($this->getReference('user-'.$stat['n']))
                    ->setSeason($this->getReference('season-'.$stat['s']))
                    ;
            $this->addReference('statistic-'.($statisticDetails+1), $Statistic);
            
            $manager->persist($Statistic);
        }
        
        $manager->flush();
        
    }



}