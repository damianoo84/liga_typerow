<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SeasonRepository extends EntityRepository
{
    // pobranie obecnego sezonu
    public function getMatchday(){
        $today = new \DateTime('now');
        $qb = $this->createQueryBuilder('s');
        $qb->select('s.id AS season_id')     
           ->where('s.dateStart > :today')
           ->setMaxResults(1)
           ->setParameter('today', $today->format('Y-m-d H:i:s'))
        ;
        
        $result = $qb->getQuery()->getOneOrNullResult();
        
        return $result['season_id'];
    }
    
}
