<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\History;

class StatisticRepository extends EntityRepository{
    
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
