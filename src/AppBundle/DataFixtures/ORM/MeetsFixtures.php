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
                'meet_name' => 'Mecz 01',
                'team_name_1' => 'Eintracht Frankfurt',
                'team_name_2' => 'Bayern Monachium',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Piątek,05-08-2022,21:00',
                'position' => 1,
            ),
            array(
                'meet_name' => 'Mecz 2',
                'team_name_1' => 'VfB Stuttgart',
                'team_name_2' => 'RB Lipsk',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Sobota,06-08-2022,17:00',
                'position' => 2,
            ),
            array(
                'meet_name' => 'Mecz 3',
                'team_name_1' => 'Borussia Dortmund',
                'team_name_2' => 'Bayer 04 Leverkusen',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Sobota,06-08-2022,16:00',
                'position' => 3,
            ),  
            array(
                'meet_name' => 'Mecz 4',
                'team_name_1' => 'VFL Wolfsburg',
                'team_name_2' => 'Werder Bremen',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Sobota,06-08-2022,18:30',
                'position' => 4,
            ),  
            array(
                'meet_name' => 'Mecz 5',
                'team_name_1' => 'Everton FC',
                'team_name_2' => 'Chelsea Londyn',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Sobota,06-08-2022,15:30',
                'position' => 5,
            ),         
            array(
                'meet_name' => 'Mecz 6',
                'team_name_1' => 'Tottenham Londyn',
                'team_name_2' => 'Southampton FC',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Sobota,06-08-2022,18:30',
                'position' => 6,
            ),  
            array(
                'meet_name' => 'Mecz 7',
                'team_name_1' => 'Fulham FC',
                'team_name_2' => 'Liverpool FC',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Sobota,06-08-2022,15:00',
                'position' => 7,
            ),    
            array(
                'meet_name' => 'Mecz 8',
                'team_name_1' => 'West Ham United',
                'team_name_2' => 'Manchester City',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Niedziela,06-08-2022,15:00',
                'position' => 8,
            ),  
            array(
                'meet_name' => 'Mecz 9',
                'team_name_1' => 'Lille OSC',
                'team_name_2' => 'AJ Auxerre',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Francuska',
                'term' => 'Niedziela,07-08-2022,15:00',
                'position' => 9,
            ),  
            array(
                'meet_name' => 'Mecz 10',
                'team_name_1' => 'Olympique Marsylia',
                'team_name_2' => 'Stade de Reims',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Francuska',
                'term' => 'Niedziela,07-08-2022,15:00',
                'position' => 10,
            ),

        );
        
        $counter = 1;
        $matchdays = 15;
        
//        for($i=1;$i<=$matchdays;$i++){
            foreach ($meetsList as $meetsDetails) {
                $Meet = new Meet();
                $Meet->setPosition($meetsDetails['position'])
                        ->setTerm($meetsDetails['term'])
                        ->setMatchday($this->getReference('matchday-'.$meetsDetails['matchday_name']))
                        ->setHostTeam($this->getReference('team-'.$meetsDetails['team_name_1']))
                        ->setGuestTeam($this->getReference('team-'.$meetsDetails['team_name_2']))
                        ->setName('Mecz '.$counter)
                        ->setLeague($this->getReference('League-'.$meetsDetails['description']));
                        ;
                $this->addReference('meet-Mecz '.$counter, $Meet);
//                var_dump($counter);
                $manager->persist($Meet);
                $counter++;
            }
//        }
        $manager->flush();
        
    }
    
}