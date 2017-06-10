<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\History;

class HistoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 2;
    }
    
    public function load(ObjectManager $manager) {
        
        $historyList = array(

            1   => array(14,8,16,10,22,12,14,4,18,4,6,16,14,8,6),
            2   => array(12,4,8,10,20,14,12,4,4,10,10,12,18,12,10),
            3   => array(6,18,14,8,12,6,6,10,14,14,10,6,14,6,10),
            4   => array(12,8,2,12,8,12,10,2,10,16,6,14,14,6,14),
            5   => array(12,6,8,8,14,14,14,6,14,4,6,14,8,8,6),
            6   => array(8,8,10,10,12,8,12,6,12,10,8,14,10,6,8),
            7   => array(12,6,8,8,20,12,10,4,6,6,6,18,10,8,8),

            8   => array(10,16,24,6,12,12,10,2,10,16,14,12,18,12,16),
            9   => array(8,10,6,4,16,16,8,10,12,20,18,10,18,16,14),
            10  => array(10,20,12,8,14,14,8,10,8,12,16,18,18,6,12),
            11  => array(6,8,14,12,8,16,8,10,10,10,20,10,16,20,14),
            12  => array(8,16,6,6,14,10,8,8,16,20,12,12,18,14,12),
            13  => array(6,24,10,6,8,10,10,6,16,12,6,14,18,14,14),
            14  => array(8,16,6,8,16,10,6,6,10,16,10,20,16,16,10),
            15  => array(8,12,6,2,8,14,14,2,16,14,12,12,18,12,16),
            16  => array(6,18,10,8,6,16,2,2,12,16,12,12,14,8,16),
            17  => array(8,12,10,2,10,6,12,4,8,10,18,12,14,10,14),

            18  => array(18,18,14,20,10,14,12,16,10,12,10,10,8,14,18),
            19  => array(10,20,10,16,12,18,16,12,12,14,8,12,14,12,14),
            20  => array(14,18,16,16,6,10,16,10,8,16,4,16,18,10,14),
            21  => array(16,16,20,14,8,10,14,18,6,16,6,8,12,8,14),
            22  => array(10,22,14,18,8,14,18,10,10,4,8,18,10,10,12),
            23  => array(16,18,16,18,16,12,14,4,10,10,4,12,20,6,8),
            24  => array(14,16,22,8,8,12,8,14,16,12,4,14,12,6,14),
            25  => array(14,14,22,14,8,10,10,10,16,12,6,10,10,8,14),
            26  => array(14,16,14,18,6,16,20,6,8,12,8,8,6,6,14),
            27  => array(16,16,12,20,16,6,0,16,10,12,6,10,6,8,14),

            28  => array(16,12,6,8,10,6,8,22,14,16,26,12,6,14,16),
            29  => array(16,14,14,10,12,6,18,10,10,16,18,16,10,6,6),
            30  => array(10,14,16,12,10,12,10,14,10,16,18,18,8,4,10),
            31  => array(20,14,18,8,4,8,16,12,10,10,10,16,10,8,8),
            32  => array(8,18,8,8,12,4,14,10,8,10,18,18,4,6,14),
            33  => array(12,10,18,8,4,6,18,20,12,12,12,14,6,4,2),
            34  => array(12,8,6,10,6,4,16,14,10,14,12,18,6,10,6),
            35  => array(12,12,12,10,10,12,18,14,10,12,6,12,2,4,2),
            36  => array(4,8,16,6,18,8,12,20,2,10,14,10,6,8,4),
            37  => array(12,12,12,8,6,8,8,12,6,14,4,20,10,4,8),

            38  => array(18,20,16,18,10,18,10,20,16,14,12,8,20,12,12),
            39  => array(16,22,10,14,10,22,14,18,14,18,12,12,20,6,12),
            40  => array(16,16,10,18,10,20,8,22,14,10,10,10,18,10,12),
            41  => array(12,14,10,20,14,20,12,10,18,12,6,8,18,8,20),
            42  => array(8,16,16,16,6,20,10,22,14,10,12,8,18,8,16),
            43  => array(16,12,16,10,8,12,16,18,22,8,8,14,14,6,12),
            44  => array(8,20,12,6,10,16,12,20,16,8,8,12,18,12,14),
            45  => array(8,0,10,16,4,16,10,20,12,10,12,10,18,8,6),
            46  => array(8,14,12,14,12,16,18,16,16,16,0,10,0,6,0),
            47  => array(14,0,20,10,12,20,14,16,18,16,0,10,0,0,0),

            48  => array(14,6,10,14,12,18,8,18,16,14,18,8,12,10,6),
            49  => array(16,10,12,8,12,16,6,16,12,10,24,4,10,14,8),
            50  => array(10,10,12,12,18,18,8,10,8,16,10,8,18,6,12),
            51  => array(10,6,20,12,12,10,4,18,14,12,12,8,18,10,6),
            52  => array(12,10,10,12,8,14,10,22,10,12,12,6,20,6,8),
            53  => array(12,14,16,10,14,18,12,14,10,12,10,4,14,10,0),
            54  => array(8,8,10,8,12,10,4,8,10,16,20,6,22,10,8),
            55  => array(10,12,8,12,10,18,8,10,10,16,10,6,8,8,8),
            56  => array(12,8,8,12,14,16,6,20,8,10,8,8,14,0,6),

            57  => array(24,8,14,12,10,8,12,10,18,14,18,12,16,18,4),
            58  => array(16,8,18,12,14,4,14,12,18,12,14,14,22,10,4),
            59  => array(14,10,20,12,10,6,14,6,16,16,12,16,14,10,8),
            60  => array(18,2,8,16,10,6,14,10,22,14,20,10,12,14,6),
            61  => array(10,8,14,10,12,4,14,14,16,10,16,10,14,14,12),
            62  => array(16,0,14,16,10,2,18,12,16,10,10,12,16,14,10),
            63  => array(18,10,10,12,2,8,0,16,10,12,14,12,14,20,6),
            64  => array(8,8,20,8,14,2,8,0,18,10,18,8,18,16,8),
            65  => array(8,4,12,14,12,4,0,0,20,8,24,8,0,0,0),
            66  => array(12,6,18,8,2,8,0,0,12,0,0,0,0,0,0),

            67  => array(8,14,10,8,16,14,16,20,10,12,14,14,8,12,18),
            68  => array(4,16,4,8,12,16,16,14,12,18,18,6,16,12,12),
            69  => array(14,18,8,4,10,14,14,18,12,8,18,10,6,12,16),
            70  => array(12,14,8,6,10,12,20,16,12,14,16,6,12,12,10),
            71  => array(12,8,14,10,20,10,16,12,8,14,12,12,10,6,16),
            72  => array(6,18,10,6,14,16,12,14,8,20,12,12,8,6,12),
            73  => array(6,14,14,4,12,14,12,26,12,0,16,10,10,2,10),
            74  => array(14,16,4,14,10,8,8,14,12,8,14,16,8,4,8),
            75  => array(6,12,6,6,10,14,8,6,12,14,10,10,4,8,10),

            76  => array(16,6,8,14,10,12,10,18,26,8,14,14,6,10,10),
            77  => array(16,8,10,14,10,12,4,20,18,14,14,10,8,6,10),
            78  => array(16,6,12,12,6,14,8,12,16,18,10,18,8,14,4),
            79  => array(14,12,8,12,6,12,6,14,14,12,14,18,8,12,8),
            80  => array(10,0,10,14,6,10,16,10,16,8,14,12,12,14,14),
            81  => array(14,12,10,10,12,10,8,10,16,6,14,12,14,6,10),
            82  => array(12,8,10,12,8,10,12,10,12,16,10,12,14,6,10),
            83  => array(14,4,8,10,0,10,10,12,20,8,16,14,12,8,8),
            84  => array(16,0,8,12,2,12,16,8,20,16,16,10,2,8,6),
            85  => array(12,8,8,14,6,10,12,8,14,6,12,16,8,4,8),

            86  => array(10,20,18,10,18,8,12,10,12,10,18,16,22,14,6),
            87  => array(10,18,10,10,14,8,18,10,18,8,18,12,14,12,6),
            88  => array(16,12,18,8,8,14,18,12,8,6,16,10,16,12,8),
            89  => array(18,16,10,6,12,14,14,10,10,4,12,12,16,14,6),
            90  => array(18,12,12,10,16,10,6,16,8,8,16,10,12,10,10),
            91  => array(14,10,6,10,10,8,20,12,16,12,16,12,12,10,6),
            92  => array(14,6,14,14,12,8,6,12,8,4,20,14,20,8,10),
            93  => array(10,16,8,6,14,6,20,8,8,8,18,10,18,10,6),
            94  => array(14,8,10,12,14,12,10,12,12,4,20,10,14,4,8),
            95  => array(12,8,16,8,10,8,12,10,14,2,20,8,18,10,4),

            96  => array(16,14,16,4,14,14,12,16,14,16,16,26,12,10,6),
            97  => array(8,16,12,10,10,16,14,16,14,14,18,18,8,12,10),
            98  => array(12,6,16,14,14,20,12,16,8,12,14,26,10,6,6),
            99  => array(14,16,6,10,18,12,12,14,12,16,10,22,8,8,6),
            100 => array(14,14,6,8,14,12,18,16,10,12,14,22,10,8,6),
            101 => array(12,8,10,16,16,14,10,14,10,12,12,18,14,8,8),
            102 => array(10,10,20,6,10,8,16,10,18,12,8,16,20,8,2),
            103 => array(10,12,10,8,14,16,14,8,8,12,6,12,10,14,14),
            104 => array(12,12,8,18,8,10,16,14,0,20,10,22,12,0,6),
            105 => array(8,14,14,10,14,12,16,8,14,8,2,12,10,0,0),
            
            106 => array(20,8,12,12,10,26,12,20,22,8,12,8,10,18,14),
            107 => array(16,8,18,8,14,22,18,16,16,12,12,10,10,16,14),
            108 => array(18,12,14,10,18,18,18,14,12,12,4,10,18,12),
            109 => array(16,12,16,10,12,18,18,20,12,10,10,6,8,16,16),
            110 => array(14,10,18,10,14,18,20,14,14,14,8,8,8,16,12),
            111 => array(14,14,18,10,10,22,10,16,18,6,14,8,6,20,8),
            112 => array(16,14,18,14,16,20,12,12,16,4,4,10,6,14,8),
            113 => array(12,10,16,12,16,16,14,14,18,4,10,6,14,12,6),
            114 => array(16,10,14,10,8,18,18,10,12,6,0,10,8,10,14),
            115 => array(16,12,10,10,12,16,0,12,16,8,16,0,0,0,0),
            
        );
        
        foreach ($historyList as $statistic => $points) {
            foreach ($points as $matchday => $points) {
                    $History = new History();
                    $History->setMatchday($this->getReference('matchday-Kolejka '.($matchday+1)))
                            ->setStatistic($this->getReference('statistic-'.$statistic))
                            ->setNumOfPoints($points)
                            ;
                    
                    $manager->persist($History);
            }
        }
        
        $manager->flush();
    }
}