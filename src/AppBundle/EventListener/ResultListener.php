<?php

namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Meet;

class ResultListener {
    
    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();
        
        if ($entity instanceof Meet) {
            $meetId = $entity->getId();
            $typeRepo = $em->getRepository('AppBundle:Type');
            $types = $typeRepo->findByMeet($meetId);
            
            foreach ($types as $type){
                if(($type->getHostType() == $entity->getHostGoals()) && ($type->getGuestType() == $entity->getGuestGoals())){
                    $type->setNumberOfPoints(4);
                }elseif(
                     (($entity->getGuestGoals() == $entity->getHostGoals()) && 
                      ($type->getGuestType() == $type->getHostType())) || 
                     (($entity->getGuestGoals() >= $entity->getHostGoals()) && 
                      ($type->getGuestType() >= $type->getHostType())) || 
                     (($entity->getGuestGoals() <= $entity->getHostGoals()) && 
                      ($type->getGuestType() <= $type->getHostType()))
                    ){
                    $type->setNumberOfPoints(2);
                }
                $em->persist($type);
            }
            $em->flush();
        }
    } 
}