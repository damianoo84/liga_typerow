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
                'hostgoals' => 1,
                'guestgoals' => 1,
                'description' => 'Liga Hiszpańska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 1,
            ),
            array(
                'meet_name' => 'Mecz 2',
                'team_name_1' => 'Atletico Madryt',
                'team_name_2' => 'Sevilla FC',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Hiszpańska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 2,
            ),
            array(
                'meet_name' => 'Mecz 3',
                'team_name_1' => 'Manchester United',
                'team_name_2' => 'Liverpool FC',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Angielska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 3,
            ),  
            array(
                'meet_name' => 'Mecz 4',
                'team_name_1' => 'Manchester City',
                'team_name_2' => 'Chelsea Londyn',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Angielska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 4,
            ),  
            array(
                'meet_name' => 'Mecz 5',
                'team_name_1' => 'Arsenal Londyn',
                'team_name_2' => 'Tottenham Londyn',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Angielska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 5,
            ),         
            array(
                'meet_name' => 'Mecz 6',
                'team_name_1' => 'Bayern Monachium',
                'team_name_2' => 'Borussia Dortmund',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Niemiecka',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 6,
            ),  
            array(
                'meet_name' => 'Mecz 7',
                'team_name_1' => 'Bayer Leverkusen',
                'team_name_2' => 'Schalke 04 Gelsenkirchen',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Niemiecka',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 7,
            ),    
            array(
                'meet_name' => 'Mecz 8',
                'team_name_1' => 'Juventus Turyn',
                'team_name_2' => 'AC Milan',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Włoska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 8,
            ),  
            array(
                'meet_name' => 'Mecz 9',
                'team_name_1' => 'AS Roma',
                'team_name_2' => 'Lazio Rzym',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Włoska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 9,
            ),  
            array(
                'meet_name' => 'Mecz 10',
                'team_name_1' => 'Inter Mediolan',
                'team_name_2' => 'SSC Napoli',
                'matchday_name' => 'Kolejka 1',
                'hostgoals' => 2,
                'guestgoals' => 1,
                'description' => 'Liga Włoska',
                'term' => 'Wtorek,12-12-2016,21:00',
                'position' => 10,
            ), 
            
            
            
        );
        
        $j = 0;
        for($i=1;$i<5;$i++){
            foreach ($meetsList as $meetsDetails) {
                
                $Meet = new Meet();
                $Meet->setDescription($meetsDetails['description'])
                        ->setGuestGoals($meetsDetails['guestgoals'])
                        ->setHostGoals($meetsDetails['hostgoals'])
                        ->setPosition($meetsDetails['position'])
                        ->setTerm($meetsDetails['term'])
                        ->setMatchday($this->getReference('matchday-Kolejka '.$i))
                        ->setHostTeam($this->getReference('team-'.$meetsDetails['team_name_1']))
                        ->setGuestTeam($this->getReference('team-'.$meetsDetails['team_name_2']))
                        ->setName('Mecz '.$j)
                        ;
                $this->addReference('meet-Mecz '.$j, $Meet);

                $manager->persist($Meet);
                $j++;
            }
        }
        $manager->flush();
        
    }
    
}