<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\History;

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
//                    ,'count(s.position) AS wins'
                )
           ->innerJoin('s.user', 'u')
           ->groupBy('u.username')
           ->orderBy('avgPtsForMatch', 'DESC')
//           ->where('s.position = :win')
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
    
    public function getUserData($user){
        $qb = $this->createQueryBuilder('s');
        $qb->select(
                    '(s.totalPoints/s.numOfQue) AS avgPtsForMatch'
                    ,'se.name AS season'
                    ,'s.numOfQue AS numOfQue'
                    ,'s.totalPoints AS totalpoints'
                    ,'s.match2 AS match2'
                    ,'s.match4 AS match4'
                )
           ->innerJoin('s.season', 'se')
           ->where('s.user = :user')
           ->orderBy('s.season', 'DESC')
           ->setParameter('user', $user)
        ;
        
        /**
         * SELECT (total_points/num_of_que) AS avgPtsForMatch, season_id AS season, 
         * num_of_que AS numOfQue, total_points AS totalpoints, match2 AS match2, 
         * match4 AS match4 FROM statistic WHERE user_id = 1 ORDER BY avgPtsForMatch DESC 
         * 
         */
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
    

    
    
}
