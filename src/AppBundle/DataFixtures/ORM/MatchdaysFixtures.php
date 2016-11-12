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
                'dateFrom' => '2015-09-07',
                'dateTo' => '2015-09-13',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 2',
                'dateFrom' => '2015-09-14',
                'dateTo' => '2015-09-20',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 3',
                'dateFrom' => '2015-09-21',
                'dateTo' => '2015-09-27',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 4',
                'dateFrom' => '2015-09-28',
                'dateTo' => '2015-10-04',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 5',
                'dateFrom' => '2015-10-05',
                'dateTo' => '2015-10-11',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 6',
                'dateFrom' => '2015-10-12',
                'dateTo' => '2015-10-18',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 7',
                'dateFrom' => '2015-10-19',
                'dateTo' => '2015-10-25',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 8',
                'dateFrom' => '2015-10-26',
                'dateTo' => '2015-11-01',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 9',
                'dateFrom' => '2015-11-02',
                'dateTo' => '2015-11-08',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 10',
                'dateFrom' => '2015-11-09',
                'dateTo' => '2015-11-15',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 11',
                'dateFrom' => '2015-11-16',
                'dateTo' => '2015-11-22',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 12',
                'dateFrom' => '2015-11-23',
                'dateTo' => '2015-11-29',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 13',
                'dateFrom' => '2015-11-30',
                'dateTo' => '2015-12-06',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 14',
                'dateFrom' => '2015-12-07',
                'dateTo' => '2015-12-13',
                'season_name' => 'Sezon 9'
            ),
            array(
                'matchday_name' => 'Kolejka 15',
                'dateFrom' => '2015-12-14',
                'dateTo' => '2015-12-20',
                'season_name' => 'Sezon 9'
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