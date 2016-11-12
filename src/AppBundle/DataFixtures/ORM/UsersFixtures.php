<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use AppBundle\Entity\User;


class UsersFixtures extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface{
    
    /**
     *
     * @var ContainerInterface
     */
    private $container;
    
    public function getOrder() {
        return 0;
    }
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
        
        $usersList = array(
            array(
                'nick' => 'Damian',
                'shortname' => 'Damian',
                'email' => 'test1@test.pl',
                'password' => 'ddaass',
                'numberofwins' => 0,
                'status' => 1,
                'priority' => 1,
                'role' => 'ROLE_SUPER_ADMIN'
            ),
            array(
                'nick' => 'Wojtek',
                'shortname' => 'Wojtek',
                'email' => 'test2@test.pl',
                'password' => 'wwoojj',
                'numberofwins' => 3,
                'status' => 1,
                'priority' => 2,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Mateusz',
                'shortname' => 'Mateusz',
                'email' => 'test3@test.pl',
                'password' => 'mmaatt',
                'numberofwins' => 0,
                'status' => 0,
                'priority' => 3,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Marcin',
                'shortname' => 'Marcin',
                'email' => 'test4@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 2,
                'status' => 1,
                'priority' => 4,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Krystian',
                'shortname' => 'Krystian',
                'email' => 'test5@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 1,
                'status' => 1,
                'priority' => 5,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Piotrek 1',
                'shortname' => 'Piotrek 1',
                'email' => 'test6@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 1,
                'status' => 1,
                'priority' => 6,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Tomek',
                'shortname' => 'Tomek',
                'email' => 'test7@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 0,
                'priority' => 7,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Michał',
                'shortname' => 'Michał',
                'email' => 'test8@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 0,
                'priority' => 8,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Adam 1',
                'shortname' => 'Adam 1',
                'email' => 'test9@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 0,
                'priority' => 9,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Przemek 1',
                'shortname' => 'Przemek 1',
                'email' => 'test10@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 0,
                'priority' => 10,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Łukasz',
                'shortname' => 'Łukasz',
                'email' => 'test11@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 1,
                'status' => 0,
                'priority' => 11,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Piotrek 2',
                'shortname' => 'Piotrek 2',
                'email' => 'test12@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 1,
                'priority' => 12,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Kuba',
                'shortname' => 'Kuba',
                'email' => 'test13@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 1,
                'priority' => 13,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Przemek 2',
                'shortname' => 'Przemek 2',
                'email' => 'test14@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 1,
                'priority' => 14,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Adam 2',
                'shortname' => 'Adam 2',
                'email' => 'test15@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 1,
                'priority' => 15,
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Piotrek 3',
                'shortname' => 'Piotrek 3',
                'email' => 'test16@test.pl',
                'password' => 'mmaarr',
                'numberofwins' => 0,
                'status' => 1,
                'priority' => 16,
                'role' => 'ROLE_USER'
            ),
               
        );
        
        $encoderFactory = $this->container->get('security.encoder_factory');
        
        foreach ($usersList as $userDetails) {
            $User = new User();
            
            $password = $encoderFactory->getEncoder($User)->encodePassword($userDetails['password'], null);
            
            $User->setUsername($userDetails['nick'])
                    ->setEmail($userDetails['email'])
                    ->setPassword($password)
                    ->setRoles(array($userDetails['role']))
                    ->setEnabled(true)
                    ->setShortname($userDetails['shortname'])
                    ->setPriority($userDetails['priority'])
                    ->setStatus($userDetails['status'])
                    ->setNumberofwins($userDetails['numberofwins']);
            
            $this->addReference('user-'.$userDetails['nick'], $User);
            
            $manager->persist($User);
            
        }
        
        $manager->flush();
        
    }

    

}
