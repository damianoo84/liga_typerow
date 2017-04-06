<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Matchday;


class MatchdaysFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
        
        $matchdaysList = array(
            array(
                'matchday_name' => 'Kolejka 1',
                'dateFrom' => '2017-04-01',
                'dateTo' => '2017-04-03',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 2',
                'dateFrom' => '2017-04-03',
                'dateTo' => '2017-04-05',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 3',
                'dateFrom' => '2017-04-05',
                'dateTo' => '2017-04-07',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 4',
                'dateFrom' => '2017-04-07',
                'dateTo' => '2017-04-09',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 5',
                'dateFrom' => '2017-04-09',
                'dateTo' => '2017-04-11',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 6',
                'dateFrom' => '2017-04-11',
                'dateTo' => '2017-04-13',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 7',
                'dateFrom' => '2017-04-13',
                'dateTo' => '2017-04-15',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 8',
                'dateFrom' => '2017-04-15',
                'dateTo' => '2017-04-17',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 9',
                'dateFrom' => '2017-04-17',
                'dateTo' => '2017-04-19',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 10',
                'dateFrom' => '2017-04-19',
                'dateTo' => '2017-04-21',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 11',
                'dateFrom' => '2017-04-21',
                'dateTo' => '2017-04-23',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 12',
                'dateFrom' => '2017-04-23',
                'dateTo' => '2017-04-25',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 13',
                'dateFrom' => '2017-04-25',
                'dateTo' => '2017-04-27',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 14',
                'dateFrom' => '2017-04-27',
                'dateTo' => '2017-04-29',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => 'Kolejka 15',
                'dateFrom' => '2017-04-29',
                'dateTo' => '2017-04-31',
                'season_name' => 'Sezon 12'
            )
            
        );
        
        foreach ($matchdaysList as $matchdaysDetails) {
            $Matchday = new Matchday();
            $Matchday->setSeason($this->getReference('season-'.$matchdaysDetails['season_name']))
                    ->setName($matchdaysDetails['matchday_name'])
                    ->setDateFrom(new \DateTime($matchdaysDetails['dateFrom']))
                    ->setDateTo(new \DateTime($matchdaysDetails['dateTo']))
                    ;
            $this->addReference('matchday-'.$matchdaysDetails['matchday_name'], $Matchday);
            
            $manager->persist($Matchday);
        }
        
        $manager->flush();
        
        
        
        
        
        
    }
    
}