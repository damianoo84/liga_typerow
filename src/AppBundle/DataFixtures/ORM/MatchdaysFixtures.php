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
                'dateFrom' => '2018-03-01',
                'dateTo' => '2018-03-02',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2018-03-03',
                'dateTo' => '2018-03-04',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2018-03-05',
                'dateTo' => '2018-03-06',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2018-03-07',
                'dateTo' => '2018-03-08',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2018-03-09',
                'dateTo' => '2018-03-10',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2018-03-11',
                'dateTo' => '2018-03-12',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2018-03-13',
                'dateTo' => '2018-03-14',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2018-03-15',
                'dateTo' => '2018-03-16',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2018-03-17',
                'dateTo' => '2018-03-18',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2018-03-19',
                'dateTo' => '2018-03-20',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2018-03-21',
                'dateTo' => '2018-03-22',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2018-03-23',
                'dateTo' => '2018-03-24',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2018-03-25',
                'dateTo' => '2018-03-26',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2018-03-27',
                'dateTo' => '2018-03-28',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2018-03-29',
                'dateTo' => '2018-03-30',
                'season_name' => 'Wiosna 2018'
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