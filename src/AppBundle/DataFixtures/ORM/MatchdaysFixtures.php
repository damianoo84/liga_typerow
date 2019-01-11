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
                'dateFrom' => '2019-02-11',
                'dateTo' => '2019-02-17',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2019-02-18',
                'dateTo' => '2019-02-24',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2019-02-25',
                'dateTo' => '2019-03-03',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2019-03-04',
                'dateTo' => '2019-03-10',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2019-03-11',
                'dateTo' => '2019-03-17',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2019-03-18',
                'dateTo' => '2019-03-24',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2019-03-25',
                'dateTo' => '2019-03-31',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2019-04-01',
                'dateTo' => '2019-04-07',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2019-04-08',
                'dateTo' => '2019-04-14',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2019-04-15',
                'dateTo' => '2019-04-21',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2019-04-22',
                'dateTo' => '2019-04-28',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2019-04-29',
                'dateTo' => '2019-05-05',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2019-05-06',
                'dateTo' => '2019-05-12',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2019-05-13',
                'dateTo' => '2019-05-19',
                'season_name' => 'Wiosna 2019'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2019-05-20',
                'dateTo' => '2019-05-26',
                'season_name' => 'Wiosna 2019'
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