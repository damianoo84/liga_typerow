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
                'dateFrom' => '2018-01-21',
                'dateTo' => '2018-01-23',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2018-01-24',
                'dateTo' => '2018-01-26',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2018-01-27',
                'dateTo' => '2018-01-29',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2018-01-30',
                'dateTo' => '2018-02-01',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2018-02-02',
                'dateTo' => '2018-02-04',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2018-02-01',
                'dateTo' => '2018-02-03',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2018-02-04',
                'dateTo' => '2018-02-06',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2018-02-07',
                'dateTo' => '2018-02-09',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2018-02-10',
                'dateTo' => '2018-02-12',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2018-02-13',
                'dateTo' => '2018-02-15',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2018-02-16',
                'dateTo' => '2018-02-18',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2018-02-19',
                'dateTo' => '2018-02-21',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2018-02-22',
                'dateTo' => '2018-02-24',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2018-02-25',
                'dateTo' => '2018-02-27',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2018-02-28',
                'dateTo' => '2018-02-30',
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