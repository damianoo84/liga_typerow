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
                    ,'m.description'
                    ,'m.term'
            )
            ->innerJoin('m.hostTeam', 'tm1')
            ->innerJoin('m.guestTeam', 'tm2')
            ->innerJoin('m.matchday', 'md')     
            ->where('md.id = :matchday')
            ->orderBy('m.id')
            ->setParameter('matchday', $matchday)
        ;
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
        
    }
    
}
