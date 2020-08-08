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
                'dateFrom' => '2020-09-07',
                'dateTo' => '2020-09-13',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2020-09-14',
                'dateTo' => '2020-09-20',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2020-09-21',
                'dateTo' => '2020-09-27',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2020-09-28',
                'dateTo' => '2020-10-04',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2020-10-05',
                'dateTo' => '2020-10-11',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2020-10-12',
                'dateTo' => '2020-10-18',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2020-10-19',
                'dateTo' => '2020-10-25',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2020-10-26',
                'dateTo' => '2020-11-01',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2020-11-02',
                'dateTo' => '2020-11-08',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2020-11-09',
                'dateTo' => '2020-11-15',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2020-11-16',
                'dateTo' => '2020-11-22',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2020-11-23',
                'dateTo' => '2020-11-29',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2020-11-30',
                'dateTo' => '2020-12-06',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2020-12-07',
                'dateTo' => '2020-12-13',
                'season_name' => 'Jesień 2020'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2020-12-14',
                'dateTo' => '2020-12-20',
                'season_name' => 'Jesień 2020'
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
