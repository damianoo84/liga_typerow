<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SeasonRepository extends EntityRepository
{
    // pobranie obecnego sezonu
    public function getSeason(){
        $today = new \DateTime('now');
        $qb = $this->createQueryBuilder('s');
        $qb->select('s.id AS season_id')     
           ->where('s.dateEnd > :today')
           ->setMaxResults(1)
           ->setParameter('today', $today->format('Y-m-d'))
        ;
        
        $result = $qb->getQuery()->getOneOrNullResult();

        return $result['season_id'];
    }
    
}
