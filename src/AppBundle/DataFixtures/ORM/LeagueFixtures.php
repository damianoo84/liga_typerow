<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\League;

class LeagueFixtures extends AbstractFixture implements OrderedFixtureInterface{

    public function getOrder() {
        return 1;
    }
    
    public function load(ObjectManager $manager) {
        
        $leaguesList = array(
            'Liga Mistrzów',
            'Liga Europy',
            'Liga Polska',
            'Liga Hiszpańska',
            'Liga Angielska',
            'Liga Włoska',
            'Liga Niemiecka',
            'Liga Francuska',
            'Liga Grecka',
            'Liga Turecka',
            'Liga Szkocka',
            'Liga Holenderska',
            'Liga Portugalska',
            'Liga Rosyjska',
            'Liga Ukraińska',
            'el. Mistrzostw Świata',
            'el. Mistrzostw Europy',
            'Mecz towarzyski',
            'Klubowe Mistrzostwa Świata',
            'Puchar Anglii',
            'Puchar Włoch',
            'Puchar Hiszpanii',
            'Puchar Niemiec',
            'Puchar Francji',
            'Puchar Ligi Angielskiej',
            'Puchar Ligi Francuskiej',
            'Puchar Polski',
            'Liga Narodów',
            'Liga Belgijska'
        );
        
        $i = 1;
        foreach ($leaguesList as $leagueDetails){
            $League = new League();
            $League->setName($leagueDetails);
            $this->addReference('League-'.$leagueDetails, $League);
            
            $manager->persist($League);
            $i++;
        }
        
        $manager->flush();
    }
    
}
