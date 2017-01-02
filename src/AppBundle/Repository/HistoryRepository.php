<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class HistoryRepository extends EntityRepository
{
   // pobranie wyników wybranego sezonu - HISTORIA
    public function getHistory($season){
        $qb = $this->createQueryBuilder('h');
        $qb->select(
                     'u.username AS username'
                    ,'h.numOfPoints AS points'
                    ,'s.name AS season'
                )
           ->innerJoin('h.user', 'u')
           ->innerJoin('h.season', 's')
           ->where('s.id = :param')
           ->groupBy('u.username')
           ->setParameter('param', $season)
//           ->orderBy('avgPtsForMatch', 'DESC')
        ;
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
        
    }
    
}
