<?php

namespace AppBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

class AppExtension extends \Twig_Extension{
    
    protected $doctrine;
    
    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('curr_matchday', array($this, 'getCurrentMatchday')),
            new \Twig_SimpleFunction('log_users', array($this, 'usersLogged')),
        );
    }
    
    /*
     * get current matchday
     */
    public function getCurrentMatchday(){
        
        $repository = $this->doctrine->getRepository('AppBundle:Matchday');
        $matchday = $repository->getMatchday();
        
        return $matchday;
    }
    
    /*
     * get logged users
     */
    public function usersLogged(){
        
        $repository = $this->doctrine->getRepository('AppBundle:User');
        $users = $repository->getActive();
        
        return $users;
    }
}