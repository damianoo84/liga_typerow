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
                'dateFrom' => '2017-09-11',
                'dateTo' => '2017-09-17',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2017-09-18',
                'dateTo' => '2017-09-24',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2017-09-25',
                'dateTo' => '2017-10-01',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2017-10-02',
                'dateTo' => '2017-10-08',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2017-10-09',
                'dateTo' => '2017-10-15',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2017-10-16',
                'dateTo' => '2017-10-22',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2017-10-23',
                'dateTo' => '2017-10-29',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2017-10-30',
                'dateTo' => '2017-11-05',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2017-11-06',
                'dateTo' => '2017-11-12',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2017-11-13',
                'dateTo' => '2017-11-19',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2017-11-20',
                'dateTo' => '2017-11-26',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2017-11-27',
                'dateTo' => '2017-12-03',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2017-12-04',
                'dateTo' => '2017-12-10',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2017-12-11',
                'dateTo' => '2017-12-17',
                'season_name' => 'Sezon 13'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2017-12-18',
                'dateTo' => '2017-12-24',
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