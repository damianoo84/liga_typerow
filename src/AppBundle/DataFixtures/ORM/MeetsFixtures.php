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
                'team_name_1' => 'FC Barcelona',
                'team_name_2' => 'Bayern Monachium',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Mistrzów',
                'term' => 'Wtorek,14-09-2021,21:00',
                'position' => 1,
            ),
            array(
                'meet_name' => 'Mecz 2',
                'team_name_1' => 'Atletico Madryt',
                'team_name_2' => 'FC Porto',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Mistrzów',
                'term' => 'środa,15-09-2021,21:00',
                'position' => 2,
            ),
            array(
                'meet_name' => 'Mecz 3',
                'team_name_1' => 'Liverpool FC',
                'team_name_2' => 'AC Milan',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Mistrzów',
                'term' => 'środa,15-09-2021,21:00',
                'position' => 3,
            ),  
            array(
                'meet_name' => 'Mecz 4',
                'team_name_1' => 'Inter Mediolan',
                'team_name_2' => 'Real Madryt',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Mistrzów',
                'term' => 'Środa,15-09-2021,21:00',
                'position' => 4,
            ),  
            array(
                'meet_name' => 'Mecz 5',
                'team_name_1' => 'Spartak Moskwa',
                'team_name_2' => 'Legia Warszawa',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Europy',
                'term' => 'Środa,15-09-2021,21:00',
                'position' => 5,
            ),         
            array(
                'meet_name' => 'Mecz 6',
                'team_name_1' => 'Juventus Turyn',
                'team_name_2' => 'AC Milan',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Włoska',
                'term' => 'Niedziela,19-09-2021,21:00',
                'position' => 6,
            ),  
            array(
                'meet_name' => 'Mecz 7',
                'team_name_1' => 'Paris Saint-Germain',
                'team_name_2' => 'Olympique Lyon',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Francuska',
                'term' => 'Niedziela,15-09-2021,21:00',
                'position' => 7,
            ),    
            array(
                'meet_name' => 'Mecz 8',
                'team_name_1' => 'Tottenham Londyn',
                'team_name_2' => 'Chelsea Londyn',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Angielska',
                'term' => 'Niedziela,15-09-2021,21:00',
                'position' => 8,
            ),  
            array(
                'meet_name' => 'Mecz 9',
                'team_name_1' => 'Real Sociedad',
                'team_name_2' => 'Sevilla FC',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Niedziela,15-09-2021,21:00',
                'position' => 9,
            ),  
            array(
                'meet_name' => 'Mecz 10',
                'team_name_1' => 'Valencia CF',
                'team_name_2' => 'Real Madryt',
                'matchday_name' => 'Kolejka 1',
                'description' => 'Liga Hiszpańska',
                'term' => 'Niedziela,15-09-2021,21:00',
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