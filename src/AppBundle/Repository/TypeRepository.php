<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TypeRepository extends EntityRepository
{
    /* Pobranie sumy punktów każdego użytkownika dla każdej kolejki */
    public function getPointsPerMatchday(){
        
        $qb = $this->createQueryBuilder('t');
        $qb->select(
                    'SUM(t.numberOfPoints) AS suma'
                    ,'u.username AS username'
                    ,'u.id AS user_id'
                    ,'u.priority'
                    ,'md.id as matchday'
                )
           ->innerJoin('t.meet', 'm')
           ->innerJoin('m.matchday', 'md')     
           ->innerJoin('t.user', 'u')
           ->where('md.id BETWEEN 1 AND 15')
           ->groupBy('u.username, md.id')
        ; 
        
        /*
            SELECT SUM(t.number_of_points) AS suma, u.username AS username, u.id AS user_id, u.priority, md.id as matchday 
            FROM type t 
            INNER JOIN meet m ON t.meet_id = m.id 
            INNER JOIN matchday md ON m.matchday_id = md.id 
            INNER JOIN user u ON t.user_id = u.id 
            WHERE md.id 
            BETWEEN 1 AND 15 
            GROUP BY u.username, md.id
         */
        
        
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
    
    /* Pobranie typów każdego usera w danej kolejce  */
    public function getTypesPerMeet($matchday){
        
        $qb = $this->createQueryBuilder('t');
        $qb->select(
                     'm.id AS meet_id'
                    ,'tm1.name AS host'
                    ,'tm2.name AS guest'
                    ,'t.hostType'
                    ,'t.guestType'
                    ,'u.username'
                    ,'m.term'
                )
           ->innerJoin('t.meet', 'm')
           ->innerJoin('m.hostTeam', 'tm1')
           ->innerJoin('m.guestTeam', 'tm2')
           ->innerJoin('m.matchday', 'md')     
           ->innerJoin('t.user', 'u')
           ->where('md.id = :matchday')
           ->orderBy('u.id,m.id')
           ->setParameter('matchday', $matchday)
        ;
        
        $result = $qb->getQuery()->getResult();
        
        $meets = array();
        
        // Pobranie meczy z kolejki
        foreach ($result as $details){
            $meets[$details['meet_id']] = $details['term'].':  '.$details['host'].' - '.$details['guest'];
        }
        
        $type_per_meet = array();
        
        
        
        // Pobranie wszystkich typów
        foreach($meets as $key => $value){
            foreach ($result as $details){
                if($key == $details['meet_id']){
                    $type_per_meet[$details['meet_id']]['meet'] = $meets[$details['meet_id']];
                    $type_per_meet[$details['meet_id']]['types'][] = $details['hostType'].' - '.$details['guestType'];
                    $type_per_meet[$details['meet_id']]['username'][] = $details['username'];
                    
                }
            }
        }
//        exit(\Doctrine\Common\Util\Debug::dump($type_per_meet));
        return $type_per_meet;
    }
    
    // pobranie sumy meczy za 2pkt i meczy za 4pkt (dla statystyk)
    public function getStatistics(){
        
        $qb = $this->createQueryBuilder('t');
        $qb->select(
                    'u.id AS user_id'
                    ,'u.username AS username'
                    ,'t.numberOfPoints AS point'
                )  
           ->innerJoin('t.user', 'u')
        ; 
        
        $result = $qb->getQuery()->getResult();
        
        $stats = array();
        
        foreach ($result as $details){
            
            if(!isset($stats[$details['username']])){
                $stats[$details['username']]['match2'] = 0;
                $stats[$details['username']]['match4'] = 0;
            }
            
            if($details['point'] == 2){
                $stats[$details['username']]['match2'] += 1;
            }
            
            if($details['point'] == 4){
                $stats[$details['username']]['match4'] += 1;
            }
            
        }
        
        return $stats;
    }
    
    // sprawdzenie czy użytkownik wytypował już w danej kolejce
    public function whoDidNotTyped($matchday){
        
        $qb = $this->createQueryBuilder('t');
        $qb->select(
                    'u.id AS user_id'
                )
           ->innerJoin('t.meet', 'm')
           ->innerJoin('m.matchday', 'md')     
           ->innerJoin('t.user', 'u')
           ->where('md.id = :matchday')
           ->andWhere('hostType <> null')
           ->setParameter('matchday', $matchday)
        ;
        
        // pobranie użytkowników, którzy wytypowali w danej kolejce
        $result = $qb->getQuery()->getSingleResult();
        
        // pobranie wszystkich użytkowników obecnego sezonu ligi typerów (IDków)
        
        // zwrócenie użytkowików, którzy nie wytypowali jeszcze
        
        return $result;
    }
    
    
}
