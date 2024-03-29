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
            array('n'=>'Wojtek',   'm2'=>58,'m4'=>14,'tP'=>172,'p'=>1, 'q'=> 15,'s'=>'Jesień 2011'),      
            array('n'=>'Tomek',    'm2'=>46,'m4'=>17,'tP'=>160,'p'=>2, 'q'=> 15,'s'=>'Jesień 2011'),
            array('n'=>'Mateusz',  'm2'=>43,'m4'=>17,'tP'=>154,'p'=>3, 'q'=> 15,'s'=>'Jesień 2011'),
            array('n'=>'Damian',   'm2'=>51,'m4'=>11,'tP'=>146,'p'=>4, 'q'=> 15,'s'=>'Jesień 2011'),
            array('n'=>'Krystian', 'm2'=>47,'m4'=>12,'tP'=>142,'p'=>5, 'q'=> 15,'s'=>'Jesień 2011'),
            array('n'=>'Piotrek1','m2'=>55,'m4'=>8, 'tP'=>142,'p'=>5, 'q'=> 15,'s'=>'Jesień 2011'),
            array('n'=>'Adam1',   'm2'=>59,'m4'=>6, 'tP'=>142,'p'=>5, 'q'=> 15,'s'=>'Jesień 2011'),
            
            array('n'=>'Wojtek',   'm2'=>57,'m4'=>19,'tP'=>190,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Łukasz1',   'm2'=>57,'m4'=>18,'tP'=>186,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Adam1',   'm2'=>51,'m4'=>21,'tP'=>186,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Michał',   'm2'=>53,'m4'=>19,'tP'=>182,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Przemek1','m2'=>64,'m4'=>13,'tP'=>180,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Piotrek1','m2'=>59,'m4'=>14,'tP'=>174,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Mateusz',  'm2'=>69,'m4'=>9, 'tP'=>174,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Krystian', 'm2'=>59,'m4'=>12,'tP'=>166,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Marcin1',   'm2'=>59,'m4'=>10,'tP'=>158,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2012'),
            array('n'=>'Damian',   'm2'=>53,'m4'=>11,'tP'=>150,'p'=>10,'q'=> 15,'s'=>'Wiosna 2012'),
            
            array('n'=>'Marcin1',   'm2'=>62,'m4'=>20,'tP'=>204,'p'=>1, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Łukasz1',   'm2'=>56,'m4'=>22,'tP'=>200,'p'=>2, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Piotrek1','m2'=>64,'m4'=>16,'tP'=>192,'p'=>3, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Krystian', 'm2'=>67,'m4'=>13,'tP'=>186,'p'=>4, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Tomek',    'm2'=>63,'m4'=>15,'tP'=>186,'p'=>4, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Mateusz',  'm2'=>52,'m4'=>20,'tP'=>184,'p'=>6, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Damian',   'm2'=>58,'m4'=>16,'tP'=>180,'p'=>7, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Adam1',   'm2'=>61,'m4'=>14,'tP'=>178,'p'=>8, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Michał',   'm2'=>56,'m4'=>15,'tP'=>172,'p'=>9, 'q'=> 15,'s'=>'Jesień 2012'),
            array('n'=>'Piotrek2','m2'=>52,'m4'=>16,'tP'=>168,'p'=>10,'q'=> 15,'s'=>'Jesień 2012'),
            
            array('n'=>'Piotrek1','m2'=>50,'m4'=>23,'tP'=>192,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Damian',   'm2'=>41,'m4'=>25,'tP'=>182,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Kuba1',     'm2'=>57,'m4'=>17,'tP'=>182,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Mateusz',  'm2'=>46,'m4'=>20,'tP'=>172,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Piotrek2','m2'=>44,'m4'=>18,'tP'=>160,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Michał',   'm2'=>45,'m4'=>17,'tP'=>158,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Marcin1',   'm2'=>52,'m4'=>12,'tP'=>152,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Wojtek',   'm2'=>46,'m4'=>14,'tP'=>148,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Krystian', 'm2'=>53,'m4'=>10,'tP'=>146,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2013'),
            array('n'=>'Adam1',   'm2'=>42,'m4'=>15,'tP'=>144,'p'=>10,'q'=> 15,'s'=>'Wiosna 2013'),

            array('n'=>'Łukasz1',   'm2'=>74,'m4'=>19,'tP'=>224,'p'=>1, 'q'=> 15,'s'=>'Jesień 2013'),
            array('n'=>'Krystian', 'm2'=>74,'m4'=>18,'tP'=>220,'p'=>2, 'q'=> 15,'s'=>'Jesień 2013'),
            array('n'=>'Piotrek1','m2'=>70,'m4'=>16,'tP'=>204,'p'=>3, 'q'=> 15,'s'=>'Jesień 2013'),
            array('n'=>'Kuba1',     'm2'=>73,'m4'=>14,'tP'=>202,'p'=>4, 'q'=> 15,'s'=>'Jesień 2013'),
            array('n'=>'Damian',   'm2'=>68,'m4'=>16,'tP'=>200,'p'=>5, 'q'=> 15,'s'=>'Jesień 2013'),
            array('n'=>'Marcin1',   'm2'=>82,'m4'=>7, 'tP'=>192,'p'=>6, 'q'=> 15,'s'=>'Jesień 2013'),
            array('n'=>'Michał',   'm2'=>68,'m4'=>14,'tP'=>192,'p'=>6, 'q'=> 15,'s'=>'Jesień 2013'),
            array('n'=>'Adam1',   'm2'=>54,'m4'=>13,'tP'=>160,'p'=>8, 'q'=> 14,'s'=>'Jesień 2013'),
            array('n'=>'Mateusz',  'm2'=>53,'m4'=>13,'tP'=>158,'p'=>9, 'q'=> 12,'s'=>'Jesień 2013'),
            array('n'=>'Wojtek',   'm2'=>45,'m4'=>15,'tP'=>150,'p'=>10,'q'=> 10,'s'=>'Jesień 2013'),
        
            array('n'=>'Krystian', 'm2'=>50,'m4'=>21,'tP'=>184,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2014'),
            array('n'=>'Przemek2','m2'=>57,'m4'=>16,'tP'=>178,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2014'),
            array('n'=>'Damian',   'm2'=>66,'m4'=>11,'tP'=>176,'p'=>3, 'q'=> 15,'s'=>'Wiosna 2014'),
            array('n'=>'Łukasz1',   'm2'=>58,'m4'=>14,'tP'=>172,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2014'),
            array('n'=>'Piotrek1','m2'=>60,'m4'=>13,'tP'=>172,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2014'),
            array('n'=>'Wojtek',   'm2'=>61,'m4'=>12,'tP'=>170,'p'=>6, 'q'=> 14,'s'=>'Wiosna 2014'),
            array('n'=>'Adam2',   'm2'=>62,'m4'=>9, 'tP'=>160,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2014'),
            array('n'=>'Kuba1',     'm2'=>55,'m4'=>11,'tP'=>154,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2014'),
            array('n'=>'Marcin1',   'm2'=>61,'m4'=>7 ,'tP'=>150,'p'=>9, 'q'=> 14,'s'=>'Wiosna 2014'),
            
            array('n'=>'Wojtek',   'm2'=>69,'m4'=>15,'tP'=>198,'p'=>1, 'q'=> 15,'s'=>'Jesień 2014'),
            array('n'=>'Piotrek1','m2'=>64,'m4'=>16,'tP'=>192,'p'=>2, 'q'=> 15,'s'=>'Jesień 2014'),
            array('n'=>'Krystian', 'm2'=>64,'m4'=>14,'tP'=>184,'p'=>3, 'q'=> 15,'s'=>'Jesień 2014'),
            array('n'=>'Kuba1',     'm2'=>69,'m4'=>11,'tP'=>182,'p'=>4, 'q'=> 15,'s'=>'Jesień 2014'),
            array('n'=>'Damian',   'm2'=>59,'m4'=>15,'tP'=>178,'p'=>5, 'q'=> 15,'s'=>'Jesień 2014'),
            array('n'=>'Przemek2','m2'=>58,'m4'=>15,'tP'=>176,'p'=>6, 'q'=> 15,'s'=>'Jesień 2014'),
            array('n'=>'Adam2',   'm2'=>52,'m4'=>15,'tP'=>164,'p'=>7, 'q'=> 14,'s'=>'Jesień 2014'),
            array('n'=>'Piotrek3','m2'=>52,'m4'=>15,'tP'=>164,'p'=>7, 'q'=> 14,'s'=>'Jesień 2014'),
            array('n'=>'Mateusz',  'm2'=>35,'m4'=>11,'tP'=>114,'p'=>9, 'q'=> 10,'s'=>'Jesień 2014'),
            array('n'=>'Łukasz1',   'm2'=>21,'m4'=>6, 'tP'=>66, 'p'=>10,'q'=> 7, 's'=>'Jesień 2014'),
            
            array('n'=>'Marcin1',   'm2'=>53,'m4'=>22,'tP'=>194,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2015'),
            array('n'=>'Wojtek',   'm2'=>46,'m4'=>23,'tP'=>184,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2015'),
            array('n'=>'Piotrek1','m2'=>55,'m4'=>18,'tP'=>182,'p'=>3, 'q'=> 15,'s'=>'Wiosna 2015'),
            array('n'=>'Piotrek3','m2'=>56,'m4'=>17,'tP'=>180,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2015'),
            array('n'=>'Damian',   'm2'=>54,'m4'=>18,'tP'=>180,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2015'),
            array('n'=>'Przemek2','m2'=>45,'m4'=>21,'tP'=>174,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2015'),
            array('n'=>'Krystian', 'm2'=>39,'m4'=>21,'tP'=>162,'p'=>7, 'q'=> 14,'s'=>'Wiosna 2015'),
            array('n'=>'Adam2',   'm2'=>47,'m4'=>16,'tP'=>158,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2015'),
            array('n'=>'Kuba1',     'm2'=>48,'m4'=>10,'tP'=>136,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2015'),
          
            array('n'=>'Kuba1',     'm2'=>53,'m4'=>19,'tP'=>182,'p'=>1, 'q'=> 15,'s'=>'Jesień 2015'),
            array('n'=>'Piotrek3','m2'=>55,'m4'=>16,'tP'=>174,'p'=>2, 'q'=> 15,'s'=>'Jesień 2015'),
            array('n'=>'Piotrek1','m2'=>59,'m4'=>14,'tP'=>174,'p'=>2, 'q'=> 15,'s'=>'Jesień 2015'),
            array('n'=>'Marcin1',   'm2'=>69,'m4'=>8, 'tP'=>170,'p'=>4, 'q'=> 15,'s'=>'Jesień 2015'),
            array('n'=>'Wojtek',   'm2'=>51,'m4'=>16,'tP'=>166,'p'=>5, 'q'=> 14,'s'=>'Jesień 2015'),
            array('n'=>'Adam2',   'm2'=>58,'m4'=>12,'tP'=>164,'p'=>6, 'q'=> 15,'s'=>'Jesień 2015'),
            array('n'=>'Damian',   'm2'=>51,'m4'=>15,'tP'=>162,'p'=>7, 'q'=> 15,'s'=>'Jesień 2015'),
            array('n'=>'Piotrek2','m2'=>57,'m4'=>10,'tP'=>154,'p'=>8, 'q'=> 14,'s'=>'Jesień 2015'),
            array('n'=>'Krystian', 'm2'=>42,'m4'=>17,'tP'=>152,'p'=>9, 'q'=> 14,'s'=>'Jesień 2015'),
            array('n'=>'Przemek2','m2'=>51,'m4'=>11,'tP'=>146,'p'=>10,'q'=> 15,'s'=>'Jesień 2015'),
            
            array('n'=>'Piotrek3','m2'=>46,'m4'=>28,'tP'=>204,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Łukasz1',   'm2'=>69,'m4'=>12,'tP'=>186,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Mateusz',  'm2'=>59,'m4'=>16,'tP'=>182,'p'=>3, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Wojtek',   'm2'=>55,'m4'=>16,'tP'=>174,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Marcin1',   'm2'=>57,'m4'=>15,'tP'=>174,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Krystian', 'm2'=>49,'m4'=>19,'tP'=>174,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Przemek2','m2'=>59,'m4'=>13,'tP'=>170,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Piotrek1','m2'=>61,'m4'=>11,'tP'=>166,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Kuba1',     'm2'=>56,'m4'=>13,'tP'=>164,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2016'),
            array('n'=>'Damian',   'm2'=>50,'m4'=>15,'tP'=>160,'p'=>10,'q'=> 15,'s'=>'Wiosna 2016'),
            
            array('n'=>'Piotrek1','m2'=>59,'m4'=>22,'tP'=>206,'p'=>1, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Kuba1',     'm2'=>58,'m4'=>20,'tP'=>196,'p'=>2, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Wojtek',   'm2'=>62,'m4'=>17,'tP'=>192,'p'=>3, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Damian',   'm2'=>48,'m4'=>22,'tP'=>184,'p'=>4, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Łukasz1',   'm2'=>58,'m4'=>17,'tP'=>184,'p'=>4, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Piotrek3','m2'=>63,'m4'=>14,'tP'=>182,'p'=>6, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Przemek2','m2'=>57,'m4'=>15,'tP'=>174,'p'=>7, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Marcin1',   'm2'=>58,'m4'=>13,'tP'=>168,'p'=>8, 'q'=> 15,'s'=>'Jesień 2016'),
            array('n'=>'Krystian', 'm2'=>50,'m4'=>17,'tP'=>168,'p'=>8, 'q'=> 13,'s'=>'Jesień 2016'),
            array('n'=>'Adam2',   'm2'=>53,'m4'=>9, 'tP'=>142,'p'=>10,'q'=> 13,'s'=>'Jesień 2016'),
            
            array('n'=>'Przemek2','m2'=>64,'m4'=>21,'tP'=>212,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Damian',   'm2'=>65,'m4'=>20,'tP'=>210,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Piotrek1','m2'=>72,'m4'=>16,'tP'=>208,'p'=>3, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Krystian', 'm2'=>70,'m4'=>15,'tP'=>200,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Arek',     'm2'=>65,'m4'=>17,'tP'=>198,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Łukasz1',   'm2'=>59,'m4'=>19,'tP'=>194,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Kuba1',     'm2'=>64,'m4'=>14,'tP'=>184,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Marcin1',   'm2'=>66,'m4'=>12,'tP'=>180,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2017'),
            array('n'=>'Piotrek3','m2'=>62,'m4'=>10,'tP'=>164,'p'=>9, 'q'=> 14,'s'=>'Wiosna 2017'),
            array('n'=>'Wojtek',   'm2'=>44,'m4'=>10,'tP'=>128,'p'=>10, 'q'=> 10,'s'=>'Wiosna 2017'),
        
            array('n'=>'Marcin1',   'm2'=>62,'m4'=>19,'tP'=>200,'p'=>1, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Krystian', 'm2'=>55,'m4'=>22,'tP'=>198,'p'=>2, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Piotrek3', 'm2'=>58,'m4'=>19,'tP'=>192,'p'=>3, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Piotrek1', 'm2'=>63,'m4'=>16,'tP'=>190,'p'=>4, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Damian',   'm2'=>59,'m4'=>18,'tP'=>190,'p'=>4, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Kuba1',     'm2'=>55,'m4'=>18,'tP'=>182,'p'=>6, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Arek',     'm2'=>54,'m4'=>18,'tP'=>180,'p'=>7, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Przemek2', 'm2'=>49,'m4'=>14,'tP'=>154,'p'=>8, 'q'=> 15,'s'=>'Jesień 2017'),
            array('n'=>'Wojtek',   'm2'=>6, 'm4'=>1, 'tP'=>16, 'p'=>9, 'q'=> 2, 's'=>'Jesień 2017'),
            
            array('n'=>'Arek',     'm2'=>71,'m4'=>16,'tP'=>206,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Piotrek1', 'm2'=>63,'m4'=>19,'tP'=>202,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Piotrek3', 'm2'=>69,'m4'=>13,'tP'=>190,'p'=>3, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Kuba1',     'm2'=>74,'m4'=>10,'tP'=>188,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Marcin1',   'm2'=>65,'m4'=>13,'tP'=>182,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Krystian', 'm2'=>68,'m4'=>11,'tP'=>180,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Przemek2', 'm2'=>61,'m4'=>14,'tP'=>178,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Zbyszek',  'm2'=>58,'m4'=>14,'tP'=>172,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2018'),
            array('n'=>'Damian',   'm2'=>63,'m4'=>11,'tP'=>170,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2018'),

            array('n'=>'Piotrek1', 'm2'=>66,'m4'=>18,'tP'=>204,'p'=>1, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Damian',   'm2'=>63,'m4'=>19,'tP'=>202,'p'=>2, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Arek',     'm2'=>56,'m4'=>22,'tP'=>200,'p'=>3, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Piotrek3', 'm2'=>53,'m4'=>21,'tP'=>190,'p'=>4, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Krystian', 'm2'=>60,'m4'=>17,'tP'=>188,'p'=>5, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Przemek2', 'm2'=>60,'m4'=>17,'tP'=>188,'p'=>6, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Robert',   'm2'=>63,'m4'=>14,'tP'=>182,'p'=>7, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Zbyszek',  'm2'=>54,'m4'=>17,'tP'=>176,'p'=>8, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Marcin1',   'm2'=>59,'m4'=>14,'tP'=>174,'p'=>9, 'q'=> 15,'s'=>'Jesień 2018'),
            array('n'=>'Kuba1',     'm2'=>63,'m4'=>12,'tP'=>174,'p'=>10,'q'=> 14,'s'=>'Jesień 2018'),
	    
            array('n'=>'Zbyszek',  'm2'=>60,'m4'=>14,'tP'=>176,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2019'),  
            array('n'=>'Piotrek3', 'm2'=>56,'m4'=>15,'tP'=>172,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2019'),
            array('n'=>'Piotrek1', 'm2'=>56,'m4'=>15,'tP'=>172,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2019'),
            array('n'=>'Arek',     'm2'=>58,'m4'=>14,'tP'=>172,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2019'),
			array('n'=>'Krystian', 'm2'=>59,'m4'=>13,'tP'=>170,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2019'),
            array('n'=>'Marcin1',   'm2'=>58,'m4'=>13,'tP'=>168,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2019'),
            array('n'=>'Przemek2', 'm2'=>51,'m4'=>16,'tP'=>166,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2019'),
            array('n'=>'Damian',   'm2'=>54,'m4'=>14,'tP'=>164,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2019'),
            array('n'=>'Robert',   'm2'=>57,'m4'=>12,'tP'=>162,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2019'),
            array('n'=>'Kuba1',     'm2'=>59,'m4'=>8, 'tP'=>150,'p'=>10,'q'=> 14,'s'=>'Wiosna 2019'),
            
            array('n'=>'Przemek2', 'm2'=>49,'m4'=>25,'tP'=>198,'p'=>1, 'q'=> 15,'s'=>'Jesień 2019'),
            array('n'=>'Arek',     'm2'=>58,'m4'=>19,'tP'=>192,'p'=>2, 'q'=> 15,'s'=>'Jesień 2019'),
            array('n'=>'Krystian', 'm2'=>50,'m4'=>21,'tP'=>184,'p'=>3, 'q'=> 15,'s'=>'Jesień 2019'),
            array('n'=>'Damian',   'm2'=>50,'m4'=>20,'tP'=>180,'p'=>4, 'q'=> 15,'s'=>'Jesień 2019'),
            array('n'=>'Piotrek1', 'm2'=>57,'m4'=>16,'tP'=>178,'p'=>5, 'q'=> 15,'s'=>'Jesień 2019'),
            array('n'=>'Piotrek3', 'm2'=>58,'m4'=>12,'tP'=>164,'p'=>6, 'q'=> 15,'s'=>'Jesień 2019'),       
            array('n'=>'Zbyszek',  'm2'=>46,'m4'=>17,'tP'=>160,'p'=>7, 'q'=> 15,'s'=>'Jesień 2019'), 
            array('n'=>'Marcin1',   'm2'=>52,'m4'=>13,'tP'=>156,'p'=>8, 'q'=> 14,'s'=>'Jesień 2019'),
            array('n'=>'Robert',   'm2'=>52,'m4'=>9, 'tP'=>140,'p'=>9, 'q'=> 14,'s'=>'Jesień 2019'), 
            array('n'=>'Kuba1',     'm2'=>45,'m4'=>12,'tP'=>138,'p'=>10,'q'=> 12,'s'=>'Jesień 2019'),

            array('n'=>'Kuba1',     'm2'=>52,'m4'=>21,'tP'=>188,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Przemek2', 'm2'=>49,'m4'=>19,'tP'=>174,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Arek',     'm2'=>48,'m4'=>19,'tP'=>172,'p'=>3, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Damian',   'm2'=>43,'m4'=>21,'tP'=>170,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Krystian', 'm2'=>50,'m4'=>17,'tP'=>168,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Marcin1',   'm2'=>58,'m4'=>12,'tP'=>164,'p'=>6, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Zbyszek',  'm2'=>47,'m4'=>14,'tP'=>150,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Piotrek1', 'm2'=>46,'m4'=>14,'tP'=>148,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Piotrek3', 'm2'=>57,'m4'=>6, 'tP'=>138,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2020'),
            array('n'=>'Robert',   'm2'=>44,'m4'=>11,'tP'=>132,'p'=>10,'q'=> 14,'s'=>'Wiosna 2020'),

			array('n'=>'Piotrek3', 'm2'=>56,'m4'=>16,'tP'=>176,'p'=>1, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Przemek2', 'm2'=>55,'m4'=>16,'tP'=>174,'p'=>2, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Damian',   'm2'=>50,'m4'=>16,'tP'=>164,'p'=>3, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Arek',     'm2'=>52,'m4'=>13,'tP'=>156,'p'=>4, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Zbyszek',  'm2'=>47,'m4'=>15,'tP'=>154,'p'=>5, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Piotrek1', 'm2'=>47,'m4'=>15,'tP'=>154,'p'=>5, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Robert',   'm2'=>46,'m4'=>15,'tP'=>152,'p'=>6, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Wojtek',   'm2'=>51,'m4'=>11,'tP'=>146,'p'=>7, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Krystian', 'm2'=>51,'m4'=>11,'tP'=>146,'p'=>7, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Marcin1',   'm2'=>52,'m4'=>10,'tP'=>144,'p'=>8, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Kuba1',     'm2'=>56,'m4'=>8, 'tP'=>144,'p'=>8, 'q'=> 15,'s'=>'Jesień 2020'),
			array('n'=>'Mateusz',  'm2'=>51,'m4'=>8, 'tP'=>134,'p'=>9, 'q'=> 15,'s'=>'Jesień 2020'),

            array('n'=>'Arek',     'm2'=>64,'m4'=>16,'tP'=>192,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Piotrek3', 'm2'=>62,'m4'=>13,'tP'=>176,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Damian',   'm2'=>46,'m4'=>19,'tP'=>168,'p'=>3, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Kuba1',     'm2'=>57,'m4'=>13,'tP'=>166,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Zbyszek',  'm2'=>51,'m4'=>15,'tP'=>162,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Krystian', 'm2'=>57,'m4'=>12,'tP'=>162,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Piotrek1', 'm2'=>51,'m4'=>13,'tP'=>154,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Przemek2', 'm2'=>45,'m4'=>12,'tP'=>138,'p'=>8, 'q'=> 15,'s'=>'Wiosna 2021'),
            array('n'=>'Wojtek',   'm2'=>46,'m4'=>9, 'tP'=>128,'p'=>9, 'q'=> 13,'s'=>'Wiosna 2021'),
            array('n'=>'Robert',   'm2'=>44,'m4'=>10,'tP'=>128,'p'=>9, 'q'=> 14,'s'=>'Wiosna 2021'),

            array('n'=>'Kuba1',    'm2'=>62,'m4'=>13,'tP'=>176,'p'=>1,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Piotrek3', 'm2'=>56,'m4'=>15,'tP'=>172,'p'=>2,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Arek',     'm2'=>57,'m4'=>12,'tP'=>162,'p'=>3,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Kuba2',    'm2'=>50,'m4'=>13,'tP'=>152,'p'=>4,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Adrian',   'm2'=>50,'m4'=>13,'tP'=>152,'p'=>4,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Piotrek1', 'm2'=>51,'m4'=>12,'tP'=>150,'p'=>6,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Damian',   'm2'=>46,'m4'=>14,'tP'=>148,'p'=>7,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Krystian', 'm2'=>49,'m4'=>12,'tP'=>146,'p'=>8,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Kamil',    'm2'=>43,'m4'=>15,'tP'=>146,'p'=>8,  'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Piotrek4', 'm2'=>55,'m4'=>8, 'tP'=>142,'p'=>10, 'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Wojtek',   'm2'=>43,'m4'=>13,'tP'=>138,'p'=>11, 'q'=> 14,'s'=>'Jesień 2021'),
            array('n'=>'Zbyszek',  'm2'=>47,'m4'=>10,'tP'=>134,'p'=>12, 'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Przemek2', 'm2'=>39,'m4'=>12,'tP'=>126,'p'=>13, 'q'=> 15,'s'=>'Jesień 2021'),
            array('n'=>'Robert',   'm2'=>48,'m4'=>6, 'tP'=>120,'p'=>14, 'q'=> 15,'s'=>'Jesień 2021'),

            array('n'=>'Grzegorz', 'm2'=>63,'m4'=>12, 'tP'=>174,'p'=>1, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Wojtek', 'm2'=>55,'m4'=>15, 'tP'=>170,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Kamil', 'm2'=>47,'m4'=>19, 'tP'=>170,'p'=>2, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Piotrek3', 'm2'=>49,'m4'=>17, 'tP'=>166,'p'=>4, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Piotrek1', 'm2'=>57,'m4'=>12, 'tP'=>162,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Krystian', 'm2'=>47,'m4'=>17, 'tP'=>162,'p'=>5, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Zbyszek', 'm2'=>52,'m4'=>14, 'tP'=>160,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Marcin1', 'm2'=>48,'m4'=>16, 'tP'=>160,'p'=>7, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Łukasz2', 'm2'=>43,'m4'=>18, 'tP'=>158,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Damian', 'm2'=>55,'m4'=>12, 'tP'=>158,'p'=>9, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Kuba1', 'm2'=>58,'m4'=>10, 'tP'=>156,'p'=>11, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Robert', 'm2'=>48,'m4'=>14, 'tP'=>152,'p'=>12, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Arek', 'm2'=>48,'m4'=>14, 'tP'=>152,'p'=>12, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Przemek2', 'm2'=>41,'m4'=>17, 'tP'=>150,'p'=>14, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Piotrek4', 'm2'=>55,'m4'=>9, 'tP'=>146,'p'=>15, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Adrian', 'm2'=>49,'m4'=>11, 'tP'=>142,'p'=>16, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Kuba2', 'm2'=>46,'m4'=>12, 'tP'=>140,'p'=>17, 'q'=> 15,'s'=>'Wiosna 2022'),
            array('n'=>'Marcin2', 'm2'=>43,'m4'=>12, 'tP'=>130,'p'=>18, 'q'=> 14,'s'=>'Wiosna 2022')
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
