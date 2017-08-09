<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Team;


class TeamsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 0;
    }
    
    public function load(ObjectManager $manager) {
        
        $teamsList = array(
            array(
                'team_name' => 'FC Barcelona',
                'shortname' => 'FCB',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Real Madryt',
                'shortname' => 'REA',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Atletico Madryt',
                'shortname' => 'ATL',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Sevilla FC',
                'shortname' => 'SEV',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Villareal CF',
                'shortname' => 'VIL',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Real Sociedad',
                'shortname' => 'SOC',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Athletic Bilbao',
                'shortname' => 'ATH',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Valencia CF',
                'shortname' => 'VAL',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Celta Vigo',
                'shortname' => 'VIG',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Espaniol Barcelona',
                'shortname' => 'ESP',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Deportivo La Coruna',
                'shortname' => 'DEP',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Betis Sevilla',
                'shortname' => 'BET',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Manchester United',
                'shortname' => 'MAN',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Manchester City',
                'shortname' => 'CIT',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Arsenal Londyn',
                'shortname' => 'ARS',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Liverpool FC',
                'shortname' => 'LIV',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Chelsea Londyn',
                'shortname' => 'CHS',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Tottenham Londyn',
                'shortname' => 'TOT',
                'league' => 'Liga Niemiecka'
            ), 
            
            
            
            array(
                'team_name' => 'Bayern Monachium',
                'shortname' => 'BAY',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Borussia Dortmund',
                'shortname' => 'BVB',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Bayer Leverkusen',
                'shortname' => 'LEV',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Schalke 04 Gelsenkirchen',
                'shortname' => 'SCH',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Juventus Turyn',
                'shortname' => 'JUV',
                'league' => 'Liga Włoska'
            ),   
            array(
                'team_name' => 'AC Milan',
                'shortname' => 'ACM',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'AS Roma',
                'shortname' => 'ASR',
                'league' => 'Liga Włoska'
            ), 
             array(
                'team_name' => 'Lazio Rzym',
                'shortname' => 'LAZ',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'Inter Mediolan',
                'shortname' => 'INT',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'SSC Napoli',
                'shortname' => 'NAP',
                'league' => 'Liga Włoska'
            ), 
            
        );
        
        foreach ($teamsList as $teamsDetails) {
            $Team = new Team();
            $Team->setName($teamsDetails['team_name'])
                    ->setShortname($teamsDetails['shortname'])
                    ->setLeague($teamsDetails['league'])
                        ;
            
            $this->addReference('team-'.$teamsDetails['team_name'], $Team);
            
            $manager->persist($Team);
        }
        
        $manager->flush();
            
    }
    
}