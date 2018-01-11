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
                'team_name' => 'Villarreal CF',
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
                'league' => 'Liga Angielska'
            ), 
            array(
                'team_name' => 'Chelsea Londyn',
                'shortname' => 'CHS',
                'league' => 'Liga Angielska'
            ), 
            array(
                'team_name' => 'Tottenham Londyn',
                'shortname' => 'TOT',
                'league' => 'Liga Angielska'
            ), 
            array(
                'team_name' => 'Leicester City',
                'shortname' => 'LSC',
                'league' => 'Liga Angielska'
            ), 
            array(
                'team_name' => 'Everton FC',
                'shortname' => 'EVE',
                'league' => 'Liga Angielska'
            ), 
            array(
                'team_name' => 'Newcastle United',
                'shortname' => 'NEW',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Southampton FC',
                'shortname' => 'SOU',
                'league' => 'Liga Angielska'
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
                'team_name' => 'Bayer 04 Leverkusen',
                'shortname' => 'LEV',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Schalke 04 Gelsenkirchen',
                'shortname' => 'SCH',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Hamburger SV',
                'shortname' => 'HAM',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Werder Brema',
                'shortname' => 'WER',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'Borussia Moenchengladbach',
                'shortname' => 'BMG',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'RB Lipsk',
                'shortname' => 'LIP',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'VFB Stuttgart',
                'shortname' => 'STU',
                'league' => 'Liga Niemiecka'
            ), 
            array(
                'team_name' => 'VFL Wolfsburg',
                'shortname' => 'WOL',
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
            array(
                'team_name' => 'Sampdoria Genua',
                'shortname' => 'SAM',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'Udinese Calcio',
                'shortname' => 'UDI',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'Fiorentina',
                'shortname' => 'FIO',
                'league' => 'Liga Włoska'
            ), 
            array(
                'team_name' => 'Paris Saint-Germain',
                'shortname' => 'PSG',
                'league' => 'Liga Francuska'
            ), 
            array(
                'team_name' => 'AS Monaco',
                'shortname' => 'MON',
                'league' => 'Liga Francuska'
            ), 
            array(
                'team_name' => 'Olympique Lyon',
                'shortname' => 'LYO',
                'league' => 'Liga Francuska'
            ), 
            array(
                'team_name' => 'Olympique Marsylia',
                'shortname' => 'MAR',
                'league' => 'Liga Francuska'
            ), 
            array(
                'team_name' => 'OGC Nice',
                'shortname' => 'NIC',
                'league' => 'Liga Francuska'
            ), 
            array(
                'team_name' => 'Girondins Bordeaux',
                'shortname' => 'BOR',
                'league' => 'Liga Francuska'
            ), 
            array(
                'team_name' => 'Olympiakos Pireus',
                'shortname' => 'PIR',
                'league' => 'Liga Grecka'
            ), 
            array(
                'team_name' => 'Panathinaikos Ateny',
                'shortname' => 'ATE',
                'league' => 'Liga Grecka'
            ), 
            array(
                'team_name' => 'Ajax Amsterdam',
                'shortname' => 'AJA',
                'league' => 'Liga Holenderska'
            ), 
            array(
                'team_name' => 'PSV Eindhoven',
                'shortname' => 'PSV',
                'league' => 'Liga Holenderska'
            ), 
            array(
                'team_name' => 'Feyenoord Rotterdam',
                'shortname' => 'FEY',
                'league' => 'Liga Holenderska'
            ), 
            array(
                'team_name' => 'FC Porto',
                'shortname' => 'POR',
                'league' => 'Liga Portugalska'
            ), 
            array(
                'team_name' => 'Sporting Lizbona',
                'shortname' => 'SPO',
                'league' => 'Liga Portugalska'
            ), 
            array(
                'team_name' => 'Benfica Lizbona',
                'shortname' => 'BEN',
                'league' => 'Liga Portugalska'
            ), 
            array(
                'team_name' => 'Dynamo Kijów',
                'shortname' => 'DYN',
                'league' => 'Liga Ukraińska'
            ), 
            array(
                'team_name' => 'Szachtar Donieck',
                'shortname' => 'SZA',
                'league' => 'Liga Ukraińska'
            ), 
            array(
                'team_name' => 'Galatasaray Stambuł',
                'shortname' => 'GAL',
                'league' => 'Liga Turecka'
            ), 
            array(
                'team_name' => 'Fenerbahce Stambuł',
                'shortname' => 'FEN',
                'league' => 'Liga Turecka'
            ), 
            array(
                'team_name' => 'Besiktas Stambuł',
                'shortname' => 'BES',
                'league' => 'Liga Turecka'
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