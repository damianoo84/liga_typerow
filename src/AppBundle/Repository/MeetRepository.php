<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MeetRepository extends EntityRepository
{
    // pobranie meczy na dana kolejke
    public function getMeetsPerMatchday($matchday){
        $qb = $this->createQueryBuilder('m');
        $qb->select(
                     'm.id AS meet_id'
                    ,'tm1.name AS host'
                    ,'tm2.name AS guest'
                    ,'l.name AS league'
                    ,'m.term'
            )
            ->innerJoin('m.hostTeam', 'tm1')
            ->innerJoin('m.guestTeam', 'tm2')
            ->innerJoin('m.league', 'l')
            ->innerJoin('m.matchday', 'md')     
            ->where('md.id = :matchday')
            ->orderBy('m.id')
            ->setParameter('matchday', $matchday)
        ;
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
        
    }
    
    // pobranie wszystkich meczy ze wszystkich kolejek
    public function getMeetsPerMatchday1to15(){
        $qb = $this->createQueryBuilder('m');
        $qb->select(
                     'm.id AS meet_id'
                    ,'md.id AS matchday'
            )
            ->innerJoin('m.matchday', 'md')     
            ->where('md.id BETWEEN 1 AND 15')
            ->orderBy('m.id')
        ;
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
        
    }
    
}
