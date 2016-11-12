<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class StatisticRepository extends EntityRepository
{
   // pobranie statystyk łączynych ze wszystkich sezonów - RANKING
    public function getRanking(){
        $qb = $this->createQueryBuilder('s');
        $qb->select(
                    'u.username AS username'
                    ,'(sum(s.totalPoints)/sum(s.numOfQue)) AS avgPtsForMatch'
                    ,'count(u.id) AS seasons'
                    ,'sum(s.numOfQue) AS numOfQue'
                    ,'sum(s.totalPoints) AS totalpoints'
                    ,'sum(s.match2) AS match2'
                    ,'sum(s.match4) AS match4'
//                    ,'sum(IF(s.position = :win, s.position, 0)) AS wins'
                )
           ->innerJoin('s.user', 'u')
           ->groupBy('u.username')
           ->orderBy('avgPtsForMatch', 'DESC')
//           ->setParameter('win', 1)
        ;
        
        /*
         * SELECT count(u.id) AS seasons,u.username AS username,sum(s.match2) AS match2,sum(s.match4) AS match4,sum(s.position = 1) AS wins,sum(s.totalPoints) AS totalpoints, sum(s.numOfQue) AS numOfQue, (sum(s.totalPoints)/sum(s.numOfQue)) AS avgPtsForMatch
FROM statistics s 
INNER JOIN users u ON s.user_id = u.id 
GROUP BY u.username
ORDER BY avgPtsForMatch DESC
         */
        
        
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
        
    }
}
