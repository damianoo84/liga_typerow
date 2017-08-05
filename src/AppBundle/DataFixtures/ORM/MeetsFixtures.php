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
                'team_name_1' => 'FC Barcelona',
                'team_name_2' => 'Real Madryt',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 1,
            ),
            array(
                'meet_name' => 'Mecz 2',
                'team_name_1' => 'Atletico Madryt',
                'team_name_2' => 'Sevilla FC',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 2,
            ),
            array(
                'meet_name' => 'Mecz 3',
                'team_name_1' => 'Manchester United',
                'team_name_2' => 'Liverpool FC',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 3,
            ),  
            array(
                'meet_name' => 'Mecz 4',
                'team_name_1' => 'Manchester City',
                'team_name_2' => 'Chelsea Londyn',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 4,
            ),  
            array(
                'meet_name' => 'Mecz 5',
                'team_name_1' => 'Arsenal Londyn',
                'team_name_2' => 'Tottenham Londyn',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 5,
            ),         
            array(
                'meet_name' => 'Mecz 6',
                'team_name_1' => 'Bayern Monachium',
                'team_name_2' => 'Borussia Dortmund',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 6,
            ),  
            array(
                'meet_name' => 'Mecz 7',
                'team_name_1' => 'Bayer Leverkusen',
                'team_name_2' => 'Schalke 04 Gelsenkirchen',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 7,
            ),    
            array(
                'meet_name' => 'Mecz 8',
                'team_name_1' => 'Juventus Turyn',
                'team_name_2' => 'AC Milan',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 8,
            ),  
            array(
                'meet_name' => 'Mecz 9',
                'team_name_1' => 'AS Roma',
                'team_name_2' => 'Lazio Rzym',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 9,
            ),  
            array(
                'meet_name' => 'Mecz 10',
                'team_name_1' => 'Inter Mediolan',
                'team_name_2' => 'SSC Napoli',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 10,
            ), 
            
            
            // 2 kolejka
            
            
            
//            array(
//                'meet_name' => 'Mecz 11',
//                'team_name_1' => 'FC Barcelona',
//                'team_name_2' => 'SSC Napoli',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 1,
//            ),
//            array(
//                'meet_name' => 'Mecz 12',
//                'team_name_1' => 'Real Madryt',
//                'team_name_2' => 'Inter Mediolan',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 2,
//            ),
//            array(
//                'meet_name' => 'Mecz 13',
//                'team_name_1' => 'Atletico Madryt',
//                'team_name_2' => 'Lazio Rzym',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 3,
//            ), 
//            array(
//                'meet_name' => 'Mecz 14',
//                'team_name_1' => 'Sevilla FC',
//                'team_name_2' => 'AS Roma',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 4,
//            ), 
//            array(
//                'meet_name' => 'Mecz 15',
//                'team_name_1' => 'Manchester United',
//                'team_name_2' => 'AC Milan',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 5,
//            ), 
//            array(
//                'meet_name' => 'Mecz 16',
//                'team_name_1' => 'Manchester City',
//                'team_name_2' => 'Juventus Turyn',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 6,
//            ), 
//            array(
//                'meet_name' => 'Mecz 17',
//                'team_name_1' => 'Arsenal Londyn',
//                'team_name_2' => 'Schalke 04 Gelsenkirchen',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 7,
//            ), 
//            array(
//                'meet_name' => 'Mecz 18',
//                'team_name_1' => 'Liverpool FC',
//                'team_name_2' => 'Bayer Leverkusen',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 8,
//            ),
//            array(
//                'meet_name' => 'Mecz 19',
//                'team_name_1' => 'Chelsea Londyn',
//                'team_name_2' => 'Borussia Dortmund',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 9,
//            ),
//            array(
//                'meet_name' => 'Mecz 20',
//                'team_name_1' => 'Tottenham Londyn',
//                'team_name_2' => 'Bayern Monachium',
//                'matchday_name' => 'Kolejka 2',
//                'description' => 'Liga Mistrzów',
//                'term' => 'Wtorek,12-12-2016,21:00',
//                'position' => 10,
//            ),
            
            
        );
        
        $i = 1;
            foreach ($meetsList as $meetsDetails) {
                $Meet = new Meet();
                $Meet->setPosition($meetsDetails['position'])
                        ->setTerm($meetsDetails['term'])
                        ->setMatchday($this->getReference('matchday-'.$meetsDetails['matchday_name']))
                        ->setHostTeam($this->getReference('team-'.$meetsDetails['team_name_1']))
                        ->setGuestTeam($this->getReference('team-'.$meetsDetails['team_name_2']))
                        ->setName('Mecz '.$i)
                        ->setLeague($this->getReference('League 1'));
                        ;
                $this->addReference('meet-Mecz '.$i, $Meet);
                
                $manager->persist($Meet);
                $i++;
            }
        $manager->flush();
        
    }
    
}