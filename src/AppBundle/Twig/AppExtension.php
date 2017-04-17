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
            new \Twig_SimpleFunction('find_matchday', array($this, 'getMatchdayByName')),
            new \Twig_SimpleFunction('get_users', array($this, 'getUsers'))
        );
    }
    
    // get current matchday
    public function getCurrentMatchday(){
        $repository = $this->doctrine->getRepository('AppBundle:Matchday');
        $matchday = $repository->getMatchday();
        
        return $matchday;
    }
    
    // get matchday by name
    public function getMatchdayByName($name){
        $repository = $this->doctrine->getRepository('AppBundle:Matchday');
        $matchday = $repository->findOneByName($name);

        return $matchday;
    }
    
    // get users by season
    public function getUsers(){
        $repoUser = $this->doctrine->getRepository('AppBundle:User');
        $users = $repoUser->findBy(array('status' => 1), array('id' => 'ASC'));

        return $users;
    }
    
    // get current logged users
    public function usersLogged(){
        $repository = $this->doctrine->getRepository('AppBundle:User');
        $users = $repository->getActive();
        
        return $users;
    }
}