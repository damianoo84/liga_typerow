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
            array(
                'nick' => 'Damian',
                'match2' => 51,
                'match4' => 11,
                'totalpoints' => 146,
                'position' => 4,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Mateusz',
                'match2' => 53,
                'match4' => 11,
                'totalpoints' => 150,
                'position' => 10,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Wojtek',
                'match2' => 58,
                'match4' => 16,
                'totalpoints' => 180,
                'position' => 7,
                'numOfQue' => 14,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Krystian',
                'match2' => 41,
                'match4' => 25,
                'totalpoints' => 182,
                'position' => 2,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Marcin',
                'match2' => 68,
                'match4' => 16,
                'totalpoints' => 200,
                'position' => 5,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Kuba',
                'match2' => 66,
                'match4' => 11,
                'totalpoints' => 176,
                'position' => 3,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Łukasz',
                'match2' => 59,
                'match4' => 15,
                'totalpoints' => 178,
                'position' => 5,
                'numOfQue' => 13,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Piotrek 1',
                'match2' => 54,
                'match4' => 18,
                'totalpoints' => 180,
                'position' => 4,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Piotrek 3',
                'match2' => 58,
                'match4' => 14,
                'totalpoints' => 172,
                'position' => 1,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            array(
                'nick' => 'Przemek 2',
                'match2' => 57,
                'match4' => 19,
                'totalpoints' => 190,
                'position' => 8,
                'numOfQue' => 15,
                'season_name' => 'Sezon 1'
            ),
            
            array(
                'nick' => 'Damian',
                'match2' => 51,
                'match4' => 11,
                'totalpoints' => 146,
                'position' => 4,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Mateusz',
                'match2' => 53,
                'match4' => 11,
                'totalpoints' => 150,
                'position' => 10,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Wojtek',
                'match2' => 58,
                'match4' => 16,
                'totalpoints' => 180,
                'position' => 7,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Krystian',
                'match2' => 41,
                'match4' => 25,
                'totalpoints' => 182,
                'position' => 2,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Marcin',
                'match2' => 68,
                'match4' => 16,
                'totalpoints' => 200,
                'position' => 5,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Kuba',
                'match2' => 66,
                'match4' => 11,
                'totalpoints' => 176,
                'position' => 3,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Łukasz',
                'match2' => 59,
                'match4' => 15,
                'totalpoints' => 178,
                'position' => 5,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Piotrek 1',
                'match2' => 54,
                'match4' => 18,
                'totalpoints' => 180,
                'position' => 4,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Piotrek 3',
                'match2' => 58,
                'match4' => 14,
                'totalpoints' => 172,
                'position' => 2,
                'numOfQue' => 15,
                'season_name' => 'Sezon 2'
            ),
            array(
                'nick' => 'Przemek 2',
                'match2' => 57,
                'match4' => 19,
                'totalpoints' => 190,
                'position' => 1,
                'numOfQue' => 14,
                'season_name' => 'Sezon 2'
            )
            
        );
        
        foreach ($statisticsList as $statisticDetails) {
            $Statistic = new Statistic();
            $Statistic->setMatch2($statisticDetails['match2'])
                    ->setMatch4($statisticDetails['match4'])
                    ->setTotalPoints($statisticDetails['totalpoints'])
                    ->setPosition($statisticDetails['position'])
                    ->setNumOfQue($statisticDetails['numOfQue'])
                    ->setUser($this->getReference('user-'.$statisticDetails['nick']))
                    ->setSeason($this->getReference('season-'.$statisticDetails['season_name']))
                    ;
            
            $manager->persist($Statistic);
        }
        
        $manager->flush();
        
    }



}