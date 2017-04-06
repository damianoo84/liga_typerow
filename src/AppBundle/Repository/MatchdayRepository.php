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
           ->where('(m.dateFrom < :today) AND (m.dateTo > :today)')
           ->setParameter('today', $today->format('Y-m-d H:i:s'))
        ;
        
        $result = $qb->getQuery()->getSingleResult();
//        exit(\Doctrine\Common\Util\Debug::dump($result));
//        var_dump($matchday);
        return $result;
        
    }
}