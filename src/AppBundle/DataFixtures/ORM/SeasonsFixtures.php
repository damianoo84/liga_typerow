<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Season;


class SeasonsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 0;
    }

    public function load(ObjectManager $manager) {
        
        $seasonsList = array(
            array(
                'season_name' => 'Sezon 1',
                'dateStart' => '2011-09-01',
                'dateEnd' => '2011-12-16',
            ),
            array(
                'season_name' => 'Sezon 2',
                'dateStart' => '2012-02-01',
                'dateEnd' => '2012-05-16',
            ),
            array(
                'season_name' => 'Sezon 3',
                'dateStart' => '2012-09-01',
                'dateEnd' => '2012-12-16',
            ),
            array(
                'season_name' => 'Sezon 4',
                'dateStart' => '2013-02-01',
                'dateEnd' => '2013-05-16',
            ),
            array(
                'season_name' => 'Sezon 5',
                'dateStart' => '2013-09-01',
                'dateEnd' => '2013-12-16',
            ),
            array(
                'season_name' => 'Sezon 6',
                'dateStart' => '2014-02-01',
                'dateEnd' => '2014-05-16',
            ),
            array(
                'season_name' => 'Sezon 7',
                'dateStart' => '2014-09-01',
                'dateEnd' => '2014-12-16',
            ),
            array(
                'season_name' => 'Sezon 8',
                'dateStart' => '2015-02-01',
                'dateEnd' => '2015-05-16',
            ),
            array(
                'season_name' => 'Sezon 9',
                'dateStart' => '2015-09-07',
                'dateEnd' => '2015-12-20',
            ),
            array(
                'season_name' => 'Sezon 10',
                'dateStart' => '2016-02-01',
                'dateEnd' => '2016-05-16',
            ),
            
        );
        
        foreach ($seasonsList as $seasonsDetails) {
            $Season = new Season();
            $Season->setName($seasonsDetails['season_name'])
                    ->setDateStart(new \DateTime($seasonsDetails['dateStart']))
                    ->setDateEnd(new \DateTime($seasonsDetails['dateEnd']));
                    
            $this->addReference('season-'.$seasonsDetails['season_name'], $Season);
            
            $manager->persist($Season);
        }
        
        $manager->flush();
        
    }
    
}