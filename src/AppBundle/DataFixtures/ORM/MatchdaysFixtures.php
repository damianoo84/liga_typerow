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
                'dateFrom' => '2017-04-29',
                'dateTo' => '2017-05-01',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '2',
                'dateFrom' => '2017-05-02',
                'dateTo' => '2017-05-04',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '3',
                'dateFrom' => '2017-05-05',
                'dateTo' => '2017-05-07',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '4',
                'dateFrom' => '2017-05-08',
                'dateTo' => '2017-05-10',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '5',
                'dateFrom' => '2017-05-11',
                'dateTo' => '2017-05-13',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '6',
                'dateFrom' => '2017-05-14',
                'dateTo' => '2017-05-16',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '7',
                'dateFrom' => '2017-05-17',
                'dateTo' => '2017-05-19',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '8',
                'dateFrom' => '2017-05-20',
                'dateTo' => '2017-05-22',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '9',
                'dateFrom' => '2017-05-23',
                'dateTo' => '2017-05-25',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '10',
                'dateFrom' => '2017-05-26',
                'dateTo' => '2017-05-28',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '11',
                'dateFrom' => '2017-05-29',
                'dateTo' => '2017-05-31',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '12',
                'dateFrom' => '2017-06-01',
                'dateTo' => '2017-06-03',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '13',
                'dateFrom' => '2017-06-04',
                'dateTo' => '2017-06-06',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '14',
                'dateFrom' => '2017-06-07',
                'dateTo' => '2017-06-09',
                'season_name' => 'Sezon 12'
            ),
            array(
                'matchday_name' => '15',
                'dateFrom' => '2017-06-10',
                'dateTo' => '2017-06-12',
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