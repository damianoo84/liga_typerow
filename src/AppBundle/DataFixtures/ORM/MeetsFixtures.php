<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Meet;


class MeetsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 2;
    }

    public function load(ObjectManager $manager) {
        
        $meetsList = array(
            array(
                'meet_name' => 'Mecz 1',
                'team_name_1' => 'Real Madryt',
                'team_name_2' => 'Real Sociedad',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Sobota,10-02-2018,20:45',
                'position' => 1,
            ),
            array(
                'meet_name' => 'Mecz 2',
                'team_name_1' => 'Tottenham Londyn',
                'team_name_2' => 'Arsenal Londyn',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Sobota,10-02-2018,13:30',
                'position' => 2,
            ),
            array(
                'meet_name' => 'Mecz 3',
                'team_name_1' => 'Newcastle United',
                'team_name_2' => 'Manchester United',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Niedziela,11-02-2018,15:15',
                'position' => 3,
            ),  
            array(
                'meet_name' => 'Mecz 4',
                'team_name_1' => 'Southampton FC',
                'team_name_2' => 'Liverpool FC',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Niedziela,11-02-2018,17:30',
                'position' => 4,
            ),  
            array(
                'meet_name' => 'Mecz 5',
                'team_name_1' => 'Manchester City',
                'team_name_2' => 'Leicester City',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Sobota,10-02-2018,18:30',
                'position' => 5,
            ),         
            array(
                'meet_name' => 'Mecz 6',
                'team_name_1' => 'Borussia Dortmund',
                'team_name_2' => 'Hamburger SV',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Sobota,10-02-2018,15:30',
                'position' => 6,
            ),  
            array(
                'meet_name' => 'Mecz 7',
                'team_name_1' => 'Bayern Monachium',
                'team_name_2' => 'Schalke 04 Gelsenkirchen',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Sobota,10-02-2018,18:30',
                'position' => 7,
            ),    
            array(
                'meet_name' => 'Mecz 8',
                'team_name_1' => 'Werder Brema',
                'team_name_2' => 'VFL Wolfsburg',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Niedziela,11-02-2018,18:00',
                'position' => 8,
            ),  
            array(
                'meet_name' => 'Mecz 9',
                'team_name_1' => 'Fiorentina',
                'team_name_2' => 'Juventus Turyn',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Piątek,09-02-2018,20:45',
                'position' => 9,
            ),  
            array(
                'meet_name' => 'Mecz 10',
                'team_name_1' => 'SSC Napoli',
                'team_name_2' => 'Lazio Rzym',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Sobota,10-02-2018,20:45',
                'position' => 10,
            )
//            , 
            
            
            // 2 kolejka
            
            
//            
//            array(
//                'meet_name' => 'Mecz 11',
//                'team_name_1' => 'Juventus Turyn',
//                'team_name_2' => 'Tottenham Londyn',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,13-02-2018,20:45',
//                'position' => 1,
//            ),
//            array(
//                'meet_name' => 'Mecz 12',
//                'team_name_1' => 'FC Porto',
//                'team_name_2' => 'Liverpool FC',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Środa,14-02-2018,20:45',
//                'position' => 2,
//            ),
//            array(
//                'meet_name' => 'Mecz 13',
//                'team_name_1' => 'Real Madryt',
//                'team_name_2' => 'Paris Saint-Germain',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Środa,14-02-2018,20:45',
//                'position' => 3,
//            ), 
//            array(
//                'meet_name' => 'Mecz 14',
//                'team_name_1' => 'Olympique Lyon',
//                'team_name_2' => 'Villarreal CF',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Europy',
//                'term' => 'Czwartek,15-02-2018,21:05',
//                'position' => 4,
//            ), 
//            array(
//                'meet_name' => 'Mecz 15',
//                'team_name_1' => 'Atletico Madryt',
//                'team_name_2' => 'Athletic Bilbao',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Hiszpańska',
//                'term' => 'Niedziela,18-02-2018,16:15',
//                'position' => 5,
//            ), 
//            array(
//                'meet_name' => 'Mecz 16',
//                'team_name_1' => 'Hamburger SV',
//                'team_name_2' => 'Bayer 04 Leverkusen',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Niemiecka',
//                'term' => 'Sobota,17-02-2018,15:30',
//                'position' => 6,
//            ), 
//            array(
//                'meet_name' => 'Mecz 17',
//                'team_name_1' => 'VFL Wolfsburg',
//                'team_name_2' => 'Bayern Monachium',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Sobota,17-02-2018,15:30',
//                'position' => 7,
//            ), 
//            array(
//                'meet_name' => 'Mecz 18',
//                'team_name_1' => 'Olympique Marsylia',
//                'team_name_2' => 'Girondins Bordeaux',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Francuska',
//                'term' => 'Sobota,17-02-2018,20:00',
//                'position' => 8,
//            ),
//            array(
//                'meet_name' => 'Mecz 19',
//                'team_name_1' => 'Borussia Moenchengladbach',
//                'team_name_2' => 'Borussia Dortmund',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,18-02-2018,18:00',
//                'position' => 9,
//            ),
//            array(
//                'meet_name' => 'Mecz 20',
//                'team_name_1' => 'Udinese Calcio',
//                'team_name_2' => 'AS Roma',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,17-02-2018,15:00',
//                'position' => 10,
//            ),
            
            
        );
        
        $counter = 1;
        $matchdays = 14;
        
        for($i=1;$i<=$matchdays;$i++){
            foreach ($meetsList as $meetsDetails) {
                $Meet = new Meet();
                $Meet->setPosition($meetsDetails['position'])
                        ->setTerm($meetsDetails['term'])
                        ->setMatchday($this->getReference('matchday-Kolejka '.$i))
                        ->setHostTeam($this->getReference('team-'.$meetsDetails['team_name_1']))
                        ->setGuestTeam($this->getReference('team-'.$meetsDetails['team_name_2']))
                        ->setName('Mecz '.$counter)
                        ->setLeague($this->getReference('League-'.$meetsDetails['description']));
                        ;
                $this->addReference('meet-Mecz '.$counter, $Meet);
                
                $manager->persist($Meet);
                $counter++;
            }
        }
        $manager->flush();
        
    }
    
}