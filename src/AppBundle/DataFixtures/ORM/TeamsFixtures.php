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
            array(
                'team_name' => 'Glasgow Rangers',
                'shortname' => 'GLA',
                'league' => 'Liga Szkocka'
            ), 
            array(
                'team_name' => 'Celtic GLasgow',
                'shortname' => 'CEL',
                'league' => 'Liga Szkocka'
            ),
            array(
                'team_name' => 'Niemcy',
                'shortname' => 'NIE',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Hiszpania',
                'shortname' => 'HIS',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Holandia',
                'shortname' => 'HOL',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Anglia',
                'shortname' => 'ANG',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Włochy',
                'shortname' => 'WŁO',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Argentyna',
                'shortname' => 'ARG',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Rosja',
                'shortname' => 'ROS',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Brazylia',
                'shortname' => 'BRA',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Turcja',
                'shortname' => 'TUR',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Irlandia',
                'shortname' => 'IRL',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Polska',
                'shortname' => 'POL',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Nigeria',
                'shortname' => 'NIG',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Austria',
                'shortname' => 'AUS',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Słowenia',
                'shortname' => 'SŁO',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Francja',
                'shortname' => 'FRA',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Kolumbia',
                'shortname' => 'KOL',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Meksyk',
                'shortname' => 'MEK',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Islandia',
                'shortname' => 'ISL',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Szwecja',
                'shortname' => 'SZW',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Chile',
                'shortname' => 'CHI',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Ukraina',
                'shortname' => 'UKR',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Portugalia',
                'shortname' => 'PO',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Belgia',
                'shortname' => 'BEL',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Szwajcaria',
                'shortname' => 'SZR',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Słowacja',
                'shortname' => 'SŁW',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Czechy',
                'shortname' => 'CZE',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Szkocja',
                'shortname' => 'SZK',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'West Ham United',
                'shortname' => 'WST',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Urugwaj',
                'shortname' => 'URU',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Serbia',
                'shortname' => 'SER',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Czarnogóra',
                'shortname' => 'CZA',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Saint Etienne',
                'shortname' => 'SAI',
                'league' => 'Liga Francuska'
            ),
            array(
                'team_name' => 'Genoa FC',
                'shortname' => 'GEN',
                'league' => 'Liga Włoska'
            ),
            array(
                'team_name' => 'Deportivo Alaves',
                'shortname' => 'ALA',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'FC Brugge',
                'shortname' => 'BRU',
                'league' => 'Liga Belgijska'
            ),
            array(
                'team_name' => 'Węgry',
                'shortname' => 'WGR',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Japonia',
                'shortname' => 'JAP',
                'league' => 'Mecz towarzyski'
            ),
	    array(
                'team_name' => 'Bułgaria',
                'shortname' => 'BUL',
                'league' => 'Mecz towarzyski'
            ),
	    array(
                'team_name' => 'Rumunia',
                'shortname' => 'RUM',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Eintracht Frankfurt',
                'shortname' => 'EIN',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'Stade Rennes',
                'shortname' => 'REN',
                'league' => 'Liga Francuska'
            ),
	    array(
                'team_name' => 'Atalanta Bergamo',
                'shortname' => 'ATA',
                'league' => 'Liga Włoska'
            ),
	    array(
                'team_name' => 'Watford FC',
                'shortname' => 'WAT',
                'league' => 'Liga Angielska'
            ),
	    array(
                'team_name' => 'Lille OSC',
                'shortname' => 'LIL',
                'league' => 'Liga Francuska'
            ),
	    array(
                'team_name' => 'Torino Calcio',
                'shortname' => 'TOR',
                'league' => 'Liga Włoska'
            ),
	    array(
                'team_name' => 'AC Parma',
                'shortname' => 'ACP',
                'league' => 'Liga Włoska'
            ),
	    array(
                'team_name' => 'Montpellier',
                'shortname' => 'MOP',
                'league' => 'Liga Francuska'
            ),
        array(
                'team_name' => 'Paragwaj',
                'shortname' => 'PAG',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Chorwacja',
                'shortname' => 'CHO',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Łotwa',
                'shortname' => 'ŁOT',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Izrael',
                'shortname' => 'IZR',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Dania',
                'shortname' => 'DAN',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Irlandia Płn.',
                'shortname' => 'IRP',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Kosowo',
                'shortname' => 'KOS',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Grecja',
                'shortname' => 'GRE',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Bośnia i H.',
                'shortname' => 'BOS',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Peru',
                'shortname' => 'PER',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Norwegia',
                'shortname' => 'NOR',
                'league' => 'Mecz towarzyski'
            ),
        array(
                'team_name' => 'Cagliari Calcio',
                'shortname' => 'CAG',
                'league' => 'Liga Włoska'
            ),
            array(
                'team_name' => 'RCD Mallorca',
                'shortname' => 'MAL',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'SC Freiburg',
                'shortname' => 'SCF',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'Hertha Berlin',
                'shortname' => 'HER',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'Union Berlin',
                'shortname' => 'UNI',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'TSG Hoffenheim',
                'shortname' => 'TSG',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => '1. FC Koeln',
                'shortname' => 'KOE',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'Fortuna Düsseldorf',
                'shortname' => 'FOR',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'FC Augsburg',
                'shortname' => 'AUG',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'SC Paderborn 07',
                'shortname' => 'PAD',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => '1. FSV Mainz 05',
                'shortname' => 'MAI',
                'league' => 'Liga Niemiecka'
            ),
            array(
                'team_name' => 'Lech Poznań',
                'shortname' => 'LEC',
                'league' => 'Liga Polska'
            ),
            array(
                'team_name' => 'Legia Warszawa',
                'shortname' => 'LEG',
                'league' => 'Liga Polska'
            ),
            array(
                'team_name' => 'Wisła Kraków',
                'shortname' => 'WIS',
                'league' => 'Liga Polska'
            ),
            array(
                'team_name' => 'Osasuna Pampeluna',
                'shortname' => 'OSA',
                'league' => 'Liga Hiszpańska'
            ),
            array(
                'team_name' => 'Bologna FC',
                'shortname' => 'BOL',
                'league' => 'Liga Włoska'
            ),
            array(
                'team_name' => 'Fulham FC',
                'shortname' => 'FUL',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Crystal Palace',
                'shortname' => 'CRY',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Leeds United',
                'shortname' => 'LEE',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'West Bromwich Albion',
                'shortname' => 'WBA',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'FC Nantes',
                'shortname' => 'NAN',
                'league' => 'Liga Francuska'
            ),
			array(
                'team_name' => 'Standard Liege',
                'shortname' => 'STA',
                'league' => 'Liga Belgijska'
            ),
            array(
                'team_name' => 'RC Lens',
                'shortname' => 'RCL',
                'league' => 'Liga Francuska'
            ),
            array(
                'team_name' => 'Dinamo Zagrzeb',
                'shortname' => 'ZAG',
                'league' => 'Liga Chorwacka'
            ),
            array(
                'team_name' => 'Zenit Sankt Petersburg',
                'shortname' => 'ZEN',
                'league' => 'Liga Rosyjska'
            ),
            array(
                'team_name' => 'Lokomotiw Moskwa',
                'shortname' => 'LOK',
                'league' => 'Liga Rosyjska'
            ),
            array(
                'team_name' => 'Aston Villa Birmingham',
                'shortname' => 'AST',
                'league' => 'Liga Angielska'
            ),
            array(
                'team_name' => 'Spartak Moskwa',
                'shortname' => 'SPA',
                'league' => 'Liga Rosyjska'
            ),
            array(
                'team_name' => 'Kanada',
                'shortname' => 'KAN',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Walia',
                'shortname' => 'WAL',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Finlandia',
                'shortname' => 'FIN',
                'league' => 'Mecz towarzyski'
            ),
            array(
                'team_name' => 'Bodo Glimt',
                'shortname' => 'BOD',
                'league' => 'Liga Norweska'
            ),
            array(
                'team_name' => 'Stade de Reims',
                'shortname' => 'REI',
                'league' => 'Liga Francuska'
            ),
            array(
                'team_name' => 'AJ Auxerre',
                'shortname' => 'AUX',
                'league' => 'Liga Francuska'
            )

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
