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
    
    
    public function getTheMost($user){
        $qb = $this->createQueryBuilder('s');
        $qb->select(
                    'max(h.numOfPoints) AS maxMatchdayPoints'
                    ,'max(s.match_2) AS maxMatch2'
                    ,'max(s.match_4) AS maxMatch4'
                    ,'max(s.match_2 + s.match_4) AS maxBetMatchSeason'
                    ,'max(s.totalPoints) AS maxSeasonTotalPoints'
                )
           ->innerJoin('s.season', 'se')
           ->where('s.user = :user')
           ->orderBy('s.season', 'DESC')
           ->setParameter('user', $user)
        ;
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
    
}
