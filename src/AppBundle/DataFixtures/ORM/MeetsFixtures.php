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
                'team_name_1' => 'Liverpool FC',
                'team_name_2' => 'Newcastle United',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Sobota,14-09-2019,13:30',
                'position' => 1,
            ),
            array(
                'meet_name' => 'Mecz 2',
                'team_name_1' => 'Manchester United',
                'team_name_2' => 'Leicester City',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Sobota,14-09-2019,16:00',
                'position' => 2,
            ),
            array(
                'meet_name' => 'Mecz 3',
                'team_name_1' => 'Borussia Dortmund',
                'team_name_2' => 'Bayer 04 Leverkusen',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Niemiecka',
                'term' => 'Sobota,14-09-2019,15:30',
                'position' => 3,
            ),  
            array(
                'meet_name' => 'Mecz 4',
                'team_name_1' => 'AS Monaco',
                'team_name_2' => 'Olympique Marsylia',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Francuska',
                'term' => 'Sobota,14-09-2019,17:30',
                'position' => 4,
            ),  
            array(
                'meet_name' => 'Mecz 5',
                'team_name_1' => 'Real Sociedad',
                'team_name_2' => 'Atletico Madryt',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Sobota,14-09-2019,18:30',
                'position' => 5,
            ),         
            array(
                'meet_name' => 'Mecz 6',
                'team_name_1' => 'FC Barcelona',
                'team_name_2' => 'Valencia CF',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Sobota,14-09-2019,21:00',
                'position' => 6,
            ),  
            array(
                'meet_name' => 'Mecz 7',
                'team_name_1' => 'Inter Mediolan',
                'team_name_2' => 'Udinese Calcio',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Niedziela,15-09-2019,18:30',
                'position' => 7,
            ),    
            array(
                'meet_name' => 'Mecz 8',
                'team_name_1' => 'Fiorentina',
                'team_name_2' => 'Juventus Turyn',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Niedziela,15-09-2019,18:00',
                'position' => 8,
            ),  
            array(
                'meet_name' => 'Mecz 9',
                'team_name_1' => 'SSC Napoli',
                'team_name_2' => 'Sampdoria Genua',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Piątek,15-09-2019,20:45',
                'position' => 9,
            ),  
            array(
                'meet_name' => 'Mecz 10',
                'team_name_1' => 'Deportivo Alaves',
                'team_name_2' => 'Sevilla FC',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Sobota,15-09-2019,20:45',
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
//        $manager->flush();
        
    }
    
}