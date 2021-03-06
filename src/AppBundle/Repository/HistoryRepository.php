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
                    ,'u.id AS user_id'
                    ,'h.numOfPoints AS suma'
                    ,'se.name AS season'
                )
           ->innerJoin('h.statistic', 's')
           ->innerJoin('s.user', 'u')
           ->innerJoin('s.season', 'se')
           ->where('se.id = :param')
           ->setParameter('param', $season)
        ;
        
        $result = $qb->getQuery()->getResult();
        
        $users = array();
        
        // 1. Sumuję łącznie wszystkie punkty ze wszystkich kolejek dla każdego usera
        foreach($result as $details){
            if(!isset($users[$details['user_id']])){
                $users[$details['user_id']] = 0;
            }
            $users[$details['user_id']] += (int)$details['suma'];
        }
        
        // 2. Sortuję aby wiedzieć kto ma najwięcej punktów 
        arsort($users);
        
        $points_per_matchday = array();
        
        // 3. Przypisuję punkty dla każdej kolejki osobno dla posortowanych już userów
        //    według łącznej sumy wszystkich punktów ze wszystkich kolejek
        foreach($users as $key => $value){
            foreach ($result as $details){
                if($key == $details['user_id']){
                    $points_per_matchday[$details['user_id']]['username'] = $details['username'];
                    $points_per_matchday[$details['user_id']]['suma'][] = (int)$details['suma'];
                }
            }
        }
        
        return $points_per_matchday; 
        
    }
    
    
    public function getTheMost($user){
        $qb = $this->createQueryBuilder('h');
        $qb->select(
                    'max(h.numOfPoints) AS maxMatchdayPoints'
                )
           ->innerJoin('h.statistic', 's')
           ->where('s.user = :user')
           ->setParameter('user', $user)
        ;
        
        $result = $qb->getQuery()->getResult();
        
        return $result;
    }
    
    
}
