<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{
    // pobranie komentarzy po ID sezonu
    public function getCommentsBySeason($season){
        $qb = $this->createQueryBuilder('c');
        $qb->select(
                     'c.text AS text'
                    ,'c.createdAt AS createdAt'
                    ,'s.id AS season_id'
                    ,'u.username AS username'
                )
           ->innerJoin('c.season', 's')
           ->innerJoin('c.user', 'u')
           ->where('s.id = :season')
           ->setParameter('season', $season)
           ->orderBy('c.createdAt','DESC')
        ;
        
        $result = $qb->getQuery()->getResult();
//        exit(\Doctrine\Common\Util\Debug::dump($result));
        
        return $result;
        
    }
}
