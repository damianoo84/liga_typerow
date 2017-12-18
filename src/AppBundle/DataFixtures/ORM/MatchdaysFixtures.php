<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Matchday;

class MatchdaysFixtures extends AbstractFixture implements OrderedFixtureInterface{
    
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
        
        $matchdaysList = array(
            array(
                'matchday_name' => '1',
                'dateFrom' => '2017-12-20',
                'dateTo' => '2017-12-22',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2017-12-23',
                'dateTo' => '2017-12-25',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2017-12-26',
                'dateTo' => '2017-12-28',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2017-12-29',
                'dateTo' => '2017-12-31',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2018-01-01',
                'dateTo' => '2018-01-03',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2018-01-04',
                'dateTo' => '2018-01-06',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2018-01-07',
                'dateTo' => '2018-01-09',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2017-12-22',
                'dateTo' => '2017-12-24',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2017-12-25',
                'dateTo' => '2017-12-27',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2017-12-28',
                'dateTo' => '2017-12-30',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2017-12-31',
                'dateTo' => '2018-01-02',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2018-01-03',
                'dateTo' => '2018-01-05',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2018-01-06',
                'dateTo' => '2018-01-08',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2018-01-09',
                'dateTo' => '2018-01-11',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2017-12-12',
                'dateTo' => '2017-12-14',
                'season_name' => 'Sezon 13'
            )
        );
        
        foreach ($matchdaysList as $matchdaysDetails) {
            $Matchday = new Matchday();
            $Matchday->setSeason($this->getReference('season-'.$matchdaysDetails['season_name']))
                    ->setName($matchdaysDetails['matchday_name'])
                    ->setDateFrom(new \DateTime($matchdaysDetails['dateFrom']))
                    ->setDateTo(new \DateTime($matchdaysDetails['dateTo']))
                    ;
            $this->addReference('matchday-Kolejka '.$matchdaysDetails['matchday_name'], $Matchday);
            
            $manager->persist($Matchday);
        }
        
        $manager->flush();
        
        
        
        
        
        
    }
    
}