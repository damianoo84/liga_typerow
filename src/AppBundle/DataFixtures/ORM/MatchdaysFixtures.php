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
                'dateFrom' => '2022-02-07',
                'dateTo' => '2022-02-13',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2022-02-14',
                'dateTo' => '2022-02-20',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2022-02-21',
                'dateTo' => '2022-02-27',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2022-02-28',
                'dateTo' => '2022-03-06',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2022-03-07',
                'dateTo' => '2022-03-13',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2022-03-14',
                'dateTo' => '2022-03-20',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2022-03-21',
                'dateTo' => '2022-03-27',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2022-03-28',
                'dateTo' => '2022-04-03',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2022-04-04',
                'dateTo' => '2022-04-10',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2022-04-11',
                'dateTo' => '2022-04-17',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2022-04-18',
                'dateTo' => '2022-04-24',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2022-04-25',
                'dateTo' => '2022-05-01',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2022-05-02',
                'dateTo' => '2022-05-08',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2022-05-09',
                'dateTo' => '2022-05-15',
                'season_name' => 'Wiosna 2022'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2022-05-16',
                'dateTo' => '2022-05-22',
                'season_name' => 'Wiosna 2022'
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
