<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function getActive()
    {
        // Pobranie wszystkich zalogowanych obecnie użytkowników
        $delay = new \DateTime();
        $delay->setTimestamp(strtotime('2 minutes ago'));
        
        $qb = $this->createQueryBuilder('u');
        $qb->select('u.username AS username')
            ->where('u.lastActivityAt > :delay')
            ->setParameter('delay', $delay)
        ;
        return $qb->getQuery()->getResult();
    }
    
   // pobranie statystyk łączynych ze wszystkich sezonów - RANKING
    public function getRanking(){
      
        $sql = 'SELECT '
            .'u.username AS username, '
            .'(sum(s.total_points) / sum(s.num_of_que)) AS avgPtsForMatch, '
            .'count(u.id) AS seasons, '
            . 'sum(s.num_of_que) AS numOfQue, '
            .'sum(s.total_points) AS totalpoints, '
            .'sum(s.match2) AS match2, '
            .'sum(s.match4) AS match4, '
            .'sum(if(s.position=1,1,0)) AS wins '
            .'FROM user u '
            .'LEFT JOIN statistic s ON s.user_id = u.id '
            .'GROUP BY u.username '
            .'ORDER BY avgPtsForMatch '
            .'DESC '
        ;
        
        $rank = $this->getEntityManager()->getConnection()->executeQuery($sql)->fetchAll();
        
        return $rank;
    }
    
}