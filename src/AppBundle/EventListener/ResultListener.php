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
                }elseif(($type->getHostType() > $type->getGuestType()) && ($entity->getHostGoals() > $entity->getGuestGoals()) && ($type->getHostType() <> $entity->getHostGoals())){
                        $type->setNumberOfPoints(2);
                }elseif(($type->getHostType() < $type->getGuestType()) && ($entity->getHostGoals() < $entity->getGuestGoals()) && ($type->getHostType() <> $entity->getHostGoals())){
                        $type->setNumberOfPoints(2);
                }elseif(($type->getHostType() == $type->getGuestType()) && ($entity->getHostGoals() == $entity->getGuestGoals()) && ($type->getHostType() <> $entity->getHostGoals())){
                        $type->setNumberOfPoints(2);
                }else{
                        $type->setNumberOfPoints(0);
                }
                
                $em->persist($type);
            }
            $em->flush();
        }
    } 
}