<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MatchdayRepository extends EntityRepository
{
    // pobranie obecnej kolejki
    public function getMatchday(){
        $today = new \DateTime('now');
        $qb = $this->createQueryBuilder('m');
        $qb->select('m.id AS id'
                    ,'m.name AS name'
                    ,'m.dateFrom AS dateFrom'
                    ,'m.dateTo AS dateTo'
                    ,'s.id AS season_id'
                )
           ->innerJoin('m.season', 's')
           ->where('m.dateFrom > :today')
           ->setMaxResults(1)
           ->setParameter('today', $today->format('Y-m-d H:i:s'))
        ;
        
//        exit(\Doctrine\Common\Util\Debug::dump($qb->getType()));
        
        $result = $qb->getQuery()->getOneOrNullResult();
        
//        exit(\Doctrine\Common\Util\Debug::dump($result));
        
        return $result;
    }
    
}