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
            new \Twig_SimpleFunction('get_users', array($this, 'getUsers')),
            new \Twig_SimpleFunction('get_meets', array($this, 'meetsByMatchday')),
            new \Twig_SimpleFunction('is_typed', array($this, 'isTyped')),
            new \Twig_SimpleFunction('sum_comments', array($this, 'getSumComments')),
            new \Twig_SimpleFunction('get_season', array($this, 'getSeasonId'))
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

        $usersList = array();
        
        foreach($users as $user){
            $usersList[] = $user->getUsername();
        }
        
        return $usersList;
    }
    
    // get current logged users
    public function usersLogged(){
        $repository = $this->doctrine->getRepository('AppBundle:User');
        $users = $repository->getActive();
        
        return $users;
    }
    
    // get current meets
    public function meetsByMatchday($matchday){
        $repository = $this->doctrine->getRepository('AppBundle:Meet');
        $meets = $repository->findBy(array('matchday' => $matchday));
        
        return $meets;
    }
    
    // is typed 
    public function isTyped($matchday, $user){
        
        $repository = $this->doctrine->getRepository('AppBundle:Type');
        $isTyped = $repository->getUserTypes($matchday, $user);
        
        if(count($isTyped) != 0){
            return true;
        }
        
        return false;
    }
    
    public function getSumComments($season){
        
        $repository = $this->doctrine->getRepository('AppBundle:Comment');
        $comment = $repository->findBySeason($season);
        $sum = count($comment);
        
        return $sum;
    }
    
    public function getSeasonId(){
        
        $repository = $this->doctrine->getRepository('AppBundle:Season');
        $season = $repository->find(13);
        
        return $season->getId();
        
    }
    
}