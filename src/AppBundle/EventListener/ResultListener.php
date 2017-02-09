<?php

namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;

class ResultListener {
    
    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();
        
        if ($entity instanceof Meet) {
            
            $meet_id = $entity->getId();
            $typeRepo = $em->getRepository('AppBundle:Type');
            $types = $typeRepo->findByMeetId($meet_id);
            
            foreach ($types as $type){
                
                if(
                        ($type[0]['hostType'] == $entity->getHostGoals()) && 
                        ($type[0]['guestType'] == $entity->getGuestGoals())){
                    $type->setNumberOfPoints(4);
                }elseif(
                        (($entity->getGuestGoals() == $entity->getHostGoals()) && 
                        ($type[0]['guestType'] == $type[0]['hostType'])) || 
                        (($entity->getGuestGoals() >= $entity->getHostGoals()) && 
                        ($type[0]['guestType'] >= $type[0]['hostType'])) || 
                        (($entity->getGuestGoals() <= $entity->getHostGoals()) && 
                        ($type[0]['guestType'] <= $type[0]['hostType']))
                        
                        )
                    {
                    $type->setNumberOfPoints(2);
                }
                
                $em->persist($type);
            }
            
            
            $em->flush();
            
        }
    }
    
    
}
