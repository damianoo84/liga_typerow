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
}