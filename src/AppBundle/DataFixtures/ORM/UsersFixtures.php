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
                'shortname' => 'D',
                'email' => 'test1@test.pl',
                'password' => 'DDAAMM',
                'numberofwins' => 0,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 22,
                'status' => 1,
                'priority' => 1,
                'phone' => '606119978',
                'role' => 'ROLE_SUPER_ADMIN'
            ),
            array(
                'nick' => 'Wojtek',
                'shortname' => 'W',
                'email' => 'test2@test.pl',
                'password' => 'hsajdksdh',
                'numberofwins' => 3,
                'rankPosition' => 5,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 2,
                'phone' => '887033022',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Mateusz',
                'shortname' => 'MT',
                'email' => 'test3@test.pl',
                'password' => 'dsjakdjslkd',
                'numberofwins' => 0,
                'rankPosition' => 12,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 3,
                'phone' => '730310189',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Marcin',
                'shortname' => 'M',
                'email' => 'test4@test.pl',
                'password' => 'h6e8',
                'numberofwins' => 3,
                'rankPosition' => 9,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 24,
                'status' => 1,
                'priority' => 4,
                'phone' => '881737984',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Krystian',
                'shortname' => 'K',
                'email' => 'test5@test.pl',
                'password' => 'd4g5',
                'numberofwins' => 1,
                'rankPosition' => 7,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 26,
                'status' => 1,
                'priority' => 5,
                'phone' => '796818505',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Piotrek1',
                'shortname' => 'P1',
                'email' => 'test6@test.pl',
                'password' => 'u8k9',
                'numberofwins' => 3,
                'rankPosition' => 3,
                'minPointPerQueue' => 2,
                'maxPointPerQueue' => 26,
                'status' => 1,
                'priority' => 6,
                'phone' => '508294223',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Tomek',
                'shortname' => 'T',
                'email' => 'test7@test.pl',
                'password' => 'dbsakbsa',
                'numberofwins' => 0,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 7,
                'phone' => '666666666',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Michał',
                'shortname' => 'MŁ',
                'email' => 'test8@test.pl',
                'password' => 'njkassd',
                'numberofwins' => 0,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 8,
                'phone' => '777777777',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Adam1',
                'shortname' => 'A1',
                'email' => 'test9@test.pl',
                'password' => 'mdkslmdas',
                'numberofwins' => 0,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 9,
                'phone' => '888888888',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Przemek1',
                'shortname' => 'PM1',
                'email' => 'test10@test.pl',
                'password' => 'c7z3',
                'numberofwins' => 0,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 10,
                'phone' => '999999999',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Łukasz',
                'shortname' => 'Ł',
                'email' => 'test11@test.pl',
                'password' => 'hduahsd',
                'numberofwins' => 1,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 11,
                'phone' => '111111112',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Piotrek2',
                'shortname' => 'P2',
                'email' => 'test12@test.pl',
                'password' => 'uyieyrewr',
                'numberofwins' => 0,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 12,
                'phone' => '222222223',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Kuba',
                'shortname' => 'KB',
                'email' => 'test13@test.pl',
                'password' => 's1n0',
                'numberofwins' => 1,
                'rankPosition' => 10,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 26,
                'status' => 1,
                'priority' => 13,
                'phone' => '514649985',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Przemek2',
                'shortname' => 'PM2',
                'email' => 'test14@test.pl',
                'password' => 'y5k7',
                'numberofwins' => 1,
                'rankPosition' => 14,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 26,
                'status' => 1,
                'priority' => 14,
                'phone' => '517496559',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Adam2',
                'shortname' => 'A2',
                'email' => 'test15@test.pl',
                'password' => 'ncknddas',
                'numberofwins' => 0,
                'rankPosition' => 8,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 0,
                'status' => 0,
                'priority' => 15,
                'phone' => '555555556',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Piotrek3',
                'shortname' => 'P3',
                'email' => 'test16@test.pl',
                'password' => 'f4s3',
                'numberofwins' => 1,
                'rankPosition' => 4,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 30,
                'status' => 1,
                'priority' => 16,
                'phone' => '509011637',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Arek',
                'shortname' => 'AR',
                'email' => 'test17@test.pl',
                'password' => 'p8w3',
                'numberofwins' => 1,
                'rankPosition' => 1,
                'minPointPerQueue' => 2,
                'maxPointPerQueue' => 20,
                'status' => 1,
                'priority' => 17,
                'phone' => '692075286',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Zbyszek',
                'shortname' => 'ZB',
                'email' => 'test18@test.pl',
                'password' => 'c7e2',
                'numberofwins' => 0,
                'rankPosition' => 13,
                'minPointPerQueue' => 0,
                'maxPointPerQueue' => 20,
                'status' => 1,
                'priority' => 18,
                'phone' => '609414775',
                'role' => 'ROLE_USER'
            ),
            array(
                'nick' => 'Robert',
                'shortname' => 'RO',
                'email' => 'test19@test.pl',
                'password' => 'c7ttr',
                'numberofwins' => 0,
                'rankPosition' => 16,
                'minPointPerQueue' => 4,
                'maxPointPerQueue' => 20,
                'status' => 1,
                'priority' => 19,
                'phone' => '501167408',
                'role' => 'ROLE_USER'
            ),
        );
        
        $encoderFactory = $this->container->get('security.encoder_factory');
        
        foreach ($usersList as $userDetails) {
            $user = new User();
            
            $password = $encoderFactory->getEncoder($user)->encodePassword($userDetails['password'], null);

//            var_dump($userDetails['minPointPerQueue']);

            $user->setUsername($userDetails['nick']);
            $user->setEmail($userDetails['email']);
            $user->setPassword($password);
            $user->setRoles(array($userDetails['role']));
            $user->setEnabled(true);
            $user->setShortname($userDetails['shortname']);
            $user->setPriority($userDetails['priority']);
            $user->setStatus($userDetails['status']);
            $user->setNumberofwins($userDetails['numberofwins']);
            $user->setPhone($userDetails['phone']);
            $user->setRankPosition($userDetails['rankPosition']);
            $user->setMinPointPerQueue($userDetails['minPointPerQueue']);
            $user->setMaxPointPerQueue($userDetails['maxPointPerQueue']);

            $this->addReference('user-'.$userDetails['nick'], $user);
            
            $manager->persist($user);
            
        }
        
        $manager->flush();
        
    }

    

}
