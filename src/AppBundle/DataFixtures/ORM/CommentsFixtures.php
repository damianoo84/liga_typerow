<?php

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Comment;


class CommentsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
        
        $commentsList = array(
            array(
                'text' => 'cos tam cos tam cos tam 1',
                'nick' => 'Damian',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'text' => 'cos tam cos tam cos tam 2',
                'nick' => 'Kuba1',
                'season_name' => 'Wiosna 2018'
            ),
            array(
                'text' => 'cos tam cos tam cos tam 3',
                'nick' => 'Marcin1',
                'season_name' => 'Wiosna 2018'
            )
            
        );
        
        foreach ($commentsList as $commentsDetails) {
            $Comment = new Comment();
            $Comment->setText($commentsDetails['text'])
                    ->setSeason($this->getReference('season-'.$commentsDetails['season_name']))
                    ->setUser($this->getReference('user-'.$commentsDetails['nick']))
                    ;
                    

            $manager->persist($Comment);
        }
        
//        $manager->flush();
        
        
        
        
        
        
    }
    
}