<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TypeRepository extends EntityRepository {

    // Pobranie sumy punktów każdego użytkownika dla każdej kolejki
    public function getPointsPerMatchday() {

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
        foreach ($result as $details) {
            if (!isset($users[$details['user_id']])) {
                $users[$details['user_id']] = 0;
            }
            $users[$details['user_id']] += (int) $details['suma'];
        }

        // 3. Sortuję aby wiedzieć kto ma najwięcej punktów 
        arsort($users);

        $points_per_matchday = array();

        // 4. Przypisuję punkty dla każdej kolejki osobno dla posortowanych już userów
        //    według łącznej sumy wszystkich punktów ze wszystkich kolejek
        foreach ($users as $key => $value) {
            foreach ($result as $details) {
                if ($key == $details['user_id']) {
                    $points_per_matchday[$details['user_id']]['username'] = $details['username'];
                    $points_per_matchday[$details['user_id']]['suma'][] = (int) $details['suma'];
                }
            }
        }

        return $points_per_matchday;
    }

    // pobranie sumy meczy za 2pkt i meczy za 4pkt (dla statystyk)
    public function getStatistics() {

        $qb = $this->createQueryBuilder('t');
        $qb->select(
                        'u.id AS user_id'
                        , 'u.username AS username'
                        , 't.numberOfPoints AS point'
                )
                ->innerJoin('t.user', 'u')
        ;

        $result = $qb->getQuery()->getResult();

        $stats = array();

        foreach ($result as $details) {

            if (!isset($stats[$details['username']])) {
                $stats[$details['username']]['match2'] = 0;
                $stats[$details['username']]['match4'] = 0;
            }

            if ($details['point'] == 2) {
                $stats[$details['username']]['match2'] += 1;
            }

            if ($details['point'] == 4) {
                $stats[$details['username']]['match4'] += 1;
            }
        }

        return $stats;
    }

    // Uwaga! tutaj musiał być NativeSQL ponieważ zwykły QueryBuilder zwracał złe dane, 
    // a potrzeba była złączenia entity User z entity Type w celu znalezienia tych userów 
    // którzy jeszcze nie wytypowali
    public function getUsersTypes($matchday) {

        // 1. Pobieram typy użytkowników
        $sql = 'SELECT  '
                     .'tm1.name AS host,  '
                     .'tm2.name AS guest, ' 
                     .'u.username AS username, ' 
                     .'t.host_type AS hostType, ' 
                     .'t.guest_type AS guestType,  '
                     .'m.matchday_id '
                     .'FROM user u  '
                     .'INNER JOIN type t ON t.user_id = u.id  '
                     .'INNER JOIN meet m ON t.meet_id = m.id ' 
                     .'INNER JOIN team tm1 ON m.hostTeam_id = tm1.id  '
                     .'INNER JOIN team tm2 ON m.guestTeam_id = tm2.id  '
                     .'ORDER BY u.id ';
        
        $params = array('matchday' => $matchday);
        $usersTypes = $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();
        
        // 2. Pobieram mecze w danej kolejce
        $meetRepo = $this->getEntityManager()->getRepository('AppBundle:Meet');
        $meets = $meetRepo->findByMatchday($matchday);
        
        // 3. Pobieram wszystkich aktywnych użytkowników 
        $userRepo = $this->getEntityManager()->getRepository('AppBundle:User');
        $users = $userRepo->findByStatus(1);
        
        $matrix = array();
        
        // jeśli zaplanowane już są jakieś mecze to:
        if($meets != NULL){
        
            // 4. Utworzenie macierzy gdzie klucze to nazwy meczy i nazwy użytkowników
            foreach($meets as $meet){
                foreach ($users as $user){
                    
                    $names = $meet->getHostTeam()->getName() . "-" . $meet->getGuestTeam()->getName();
                    $shortNames = $meet->getHostTeam()->getShortname() . "-" . $meet->getGuestTeam()->getShortname();
                    $hostGuest = $shortNames.' | '.$names;
                    
                    $matrix[$hostGuest][$user->getUsername()] = '-';
                }
            }
            
            // 5. Wypełnienie macierzy typami
            foreach ($usersTypes as $type){
                if($type['matchday_id'] == $matchday){
                    $matrix[$type['host'] . "-" . $type['guest']][$type['username']] = $type['hostType'] . ' - ' . $type['guestType'];
                }
            }
        }
//        exit(\Doctrine\Common\Util\Debug::dump($matrix));
        
        return $matrix;
    }
    
    function getUserTypes($matchday, $user) {

        // Pobranie typów użytkownika
        $sql = 'SELECT tm1.name AS host, tm1.shortname AS hostShort, '
                . 'tm2.name AS guest, tm2.shortname AS guestShort, '
                . 't.host_type AS hostType,'
                . 't.guest_type AS guestType, l.name, m.term '
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

    public function getNoTypedUsersList($matchday) {

        // Pobranie listy telefonów użytkowników, którzy jeszcze nie podali typów
        $sql = 'SELECT u.phone '
                . 'FROM type t '
                . 'INNER JOIN user u ON t.user_id = u.id '
                . 'INNER JOIN meet m ON t.meet_id = m.id '
                . 'INNER JOIN matchday md ON m.matchday_id = md.id '
                . 'WHERE md.id = :matchday '
                . 'AND u.status = 1 '
                . 'GROUP BY u.id '
                . 'HAVING COUNT(t.user_id) > 0 ';
        $params = array('matchday' => $matchday);
        $userTypes = $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();

        $phones = array();

//        var_dump($phones);

        foreach ($userTypes as $phone) {
            $phones[] = $phone['phone'];
        }

        return $phones;
    }

    function checkTypes($matchday) {

        // 
        $sql = 'SELECT * FROM type t INNER JOIN meet m ON t.meet_id = m.id WHERE m.matchday_id = :matchday';
        $params = array('matchday' => $matchday);
        $userTypes = $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();

        return $userTypes;
    }

}
