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
                'shortname' => 'FC Barcelona',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Real Madryt',
                'shortname' => 'Real Madryt',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Atletico Madryt',
                'shortname' => 'Atletico Madryt',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Sevilla FC',
                'shortname' => 'Sevilla FC',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Villareal CF',
                'shortname' => 'Villareal CF',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Real Sociedad',
                'shortname' => 'Real Sociedad',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Athletic Bilbao',
                'shortname' => 'Athletic Bilbao',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Valencia CF',
                'shortname' => 'Valencia CF',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Celta Vigo',
                'shortname' => 'Celta Vigo',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Espaniol Barcelona',
                'shortname' => 'Espaniol Barcelona',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Deportivo La Coruna',
                'shortname' => 'Deportivo La Coruna',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Betis Sevilla',
                'shortname' => 'Betis Sevilla',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Manchester United',
                'shortname' => 'Manchester United',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Manchester City',
                'shortname' => 'Manchester City',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Arsenal Londyn',
                'shortname' => 'Arsenal Londyn',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Liverpool FC',
                'shortname' => 'Liverpool FC',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Chelsea Londyn',
                'shortname' => 'Chelsea Londyn',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Tottenham Londyn',
                'shortname' => 'Tottenham Londyn',
                'league' => 'Liga Niemiecka'
            ), 
            
            
            
            array(
                'team_name' => 'Bayern Monachium',
                'shortname' => 'Bayern Monachium',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Borussia Dortmund',
                'shortname' => 'Borussia Dortmund',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Bayer Leverkusen',
                'shortname' => 'Bayer Leverkusen',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Schalke 04 Gelsenkirchen',
                'shortname' => 'Schalke 04',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Juventus Turyn',
                'shortname' => 'Juventus Turyn',
                'league' => 'Liga Włoska'
            ),   
            array(
                'team_name' => 'AC Milan',
                'shortname' => 'AC Milan',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'AS Roma',
                'shortname' => 'AS Roma',
                'league' => 'Liga Włoska'
            ), 
             array(
                'team_name' => 'Lazio Rzym',
                'shortname' => 'Lazio Rzym',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'Inter Mediolan',
                'shortname' => 'Inter Mediolan',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'SSC Napoli',
                'shortname' => 'SSC Napoli',
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