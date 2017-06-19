<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TypeRepository extends EntityRepository
{
    // Pobranie sumy punktów każdego użytkownika dla każdej kolejki
    public function getPointsPerMatchday(){
        
        // 1. Pobieram sumę punktów każdego użytkownika w każdej kolejce
        $sql = 'SELECT SUM(t.number_of_points) AS suma, u.username, u.id AS user_id, md.id AS matchday '
                . 'FROM user u '
                . 'LEFT JOIN type t ON t.user_id = u.id '
                . 'LEFT JOIN meet m ON t.meet_id = m.id '
                . 'LEFT JOIN matchday md ON m.matchday_id = md.id '
                . 'WHERE u.STATUS = :status '
                . 'GROUP BY u.username, md.id '
                . 'ORDER BY md.id, u.id ';
        $params = array('status' => 1);
        $result = $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();
        
        $users = array();
        
        // 2. Sumuję łącznie wszystkie punkty ze wszystkich kolejek dla każdego usera
        foreach($result as $details){
            if(!isset($users[$details['user_id']])){
                $users[$details['user_id']] = 0;
            }
            $users[$details['user_id']] += (int)$details['suma'];
        }
        
        // 3. Sortuję aby wiedzieć kto ma najwięcej punktów 
        arsort($users);
        
        $points_per_matchday = array();
        
        // 4. Przypisuję punkty dla każdej kolejki osobno dla posortowanych już userów
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
    
    // Uwaga! tutaj musiał być NativeSQL ponieważ zwykły QueryBuilder zwracał złe dane, 
    // a potrzeba była złączenia entity User z entity Type w celu znalezienia tych userów 
    // którzy jeszcze nie wytypowali
    public function getUsersTypes($matchday){
        
        // 1. Pobieram typy użytkowników
        $sql = 'SELECT t.meet_id,t.host_type AS hostType,t.guest_type AS guestType,u.username AS username '
                . 'FROM user u LEFT JOIN type t ON t.user_id = u.id '
                . 'WHERE u.status = :status '
                . 'ORDER BY u.id';
        $params = array('status' => 1);
        $usersTypes = $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();
        
//        exit(\Doctrine\Common\Util\Debug::dump($usersTypes));
        
        // 2. Pobieram mecze w danej kolejce
        $meetRepo = $this->getEntityManager()->getRepository('AppBundle:Meet');
        $meets = $meetRepo->getMeetsPerMatchday($matchday);
        
//        exit(\Doctrine\Common\Util\Debug::dump($meets));
        
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
    
    
    function getUserTypes($matchday,$user){
        
        // Pobranie typów użytkownika
        $sql = 'SELECT tm1.name AS host, tm2.name AS guest,t.host_type AS hostType,t.guest_type AS guestType, l.name, m.term '
                . 'FROM user u '
                . 'LEFT JOIN type t ON t.user_id = u.id '
                . 'LEFT JOIN meet m ON m.id = t.meet_id '
                . 'LEFT JOIN team tm1 ON m.hostTeam_id = tm1.id '
                . 'LEFT JOIN team tm2 ON m.guestTeam_id = tm2.id '
                . 'LEFT JOIN league l ON m.league_id = l.id '
                . 'LEFT JOIN matchday md ON md.id = m.matchday_id '
                . 'WHERE u.id = :user '
                . 'AND md.id = :matchday '
                . 'ORDER BY m.id ';
        $params = array('user' => $user, 'matchday' => $matchday);
        $userTypes = $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();
        
        return $userTypes;
    }
}