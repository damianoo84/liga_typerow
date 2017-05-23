<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TypeRepository extends EntityRepository
{
    // Pobranie sumy punktów każdego użytkownika dla każdej kolejki
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
    
    // Pobranie typów każdego usera w danej kolejce
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
        
        $types = array();
        
        $userstypes = array();
        $usersnotypes = array();
        $usersList = array();
        
        $userRepo = $this->getEntityManager()->getRepository('AppBundle:User');
        $users = $userRepo->findBy(array('status' => 1));
        
        foreach ($users as $user){
            $usersList[] = $user->getUsername();
        }
        
//        exit(\Doctrine\Common\Util\Debug::dump($usersList));
        
//        $i = 0;
//        $length = count($result);
        
        foreach ($result as $detail) {
            
            if(!in_array($detail['meet_id'],$types)) {
                
                $types[$detail['meet_id']]['meet_id'] = $detail['meet_id'];
                $types[$detail['meet_id']]['host'] = $detail['host'];
                $types[$detail['meet_id']]['guest'] = $detail['guest'];
                
                $userKey = array_search($detail['username'], $usersList);
                
                $types[$detail['meet_id']]['types'][$userKey] = $detail['hostType'].' - '.$detail['guestType'];
                
                
            }
            
//            $i++;
            
//            $userstypes[] = $detail['username'];
//            
//            if($i == $length){
//                
//                $usersnotypes = array_diff($usersList, $userstypes);
//                $types['notypes'] = $usersnotypes;
//                
//            }
        }
        
//        var_dump($types);
//        $usersnotypes = array_diff($usersList, $userstypes);
        
//        exit(\Doctrine\Common\Util\Debug::dump($types));
        
        return $types;
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
    
    // Uwaga! tutaj musiał być NativeSQL ponieważ zwykły QueryBuilder zwracał złe dane, 
    // a potrzeba była złączenia entity User z entity Type w celu znalezienia tych userów 
    // którzy jeszcze nie wytypowali
    public function getUsersTypes($matchday){
        
        // 1. Pobieram typy użytkowników
        $sql = 'SELECT t.meet_id,t.host_type AS hostType,t.guest_type AS guestType,u.username AS username '
                . 'FROM user u LEFT JOIN type t ON t.user_id = u.id '
                . 'WHERE u.STATUS = :status ORDER BY u.id';
        $params = array('status' => 1);
        $usersTypes = $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();
        
        // 2. Pobieram mecze w danej kolejce
        $meetRepo = $this->getEntityManager()->getRepository('AppBundle:Meet');
        $meets = $meetRepo->getMeetsPerMatchday($matchday);
        
        $result = array();
        
        // 3. Złączenie dwóch powyzszych zapytań
        foreach($meets as $meet){
            foreach ($usersTypes as $types){
                if($meet['meet_id'] == $types['meet_id']) {
                    $result[$types['meet_id']]['types'][] = $types['hostType'].' - '.$types['guestType'];
                }
                if($types['meet_id'] == NULL){
                        $result[$meet['meet_id']]['types'][] = '-';
                }
            }
            $result[$meet['meet_id']]['meet_id'] = $meet['meet_id'];
            $result[$meet['meet_id']]['host'] = $meet['host'];
            $result[$meet['meet_id']]['guest'] = $meet['guest'];
        }
        
        return $result;
    }
    
    
    
}
