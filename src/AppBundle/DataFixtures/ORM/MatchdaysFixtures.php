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
                'matchday_name' => '1',
                'dateFrom' => '2017-06-01',
                'dateTo' => '2017-06-03',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2017-06-04',
                'dateTo' => '2017-06-06',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2017-06-07',
                'dateTo' => '2017-06-09',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2017-06-10',
                'dateTo' => '2017-06-12',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2017-06-13',
                'dateTo' => '2017-06-15',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2017-06-16',
                'dateTo' => '2017-06-18',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2017-06-19',
                'dateTo' => '2017-06-21',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2017-06-22',
                'dateTo' => '2017-06-24',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2017-06-25',
                'dateTo' => '2017-06-27',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2017-06-28',
                'dateTo' => '2017-06-30',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2017-07-01',
                'dateTo' => '2017-07-03',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2017-07-04',
                'dateTo' => '2017-07-06',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2017-07-07',
                'dateTo' => '2017-07-09',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2017-07-10',
                'dateTo' => '2017-07-12',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2017-07-13',
                'dateTo' => '2017-07-15',
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
            $this->addReference('matchday-Kolejka '.$matchdaysDetails['matchday_name'], $Matchday);
            
            $manager->persist($Matchday);
        }
        
        $manager->flush();
        
        
        
        
        
        
    }
    
}