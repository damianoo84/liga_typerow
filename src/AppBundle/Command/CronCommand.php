<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use SoapClient;

class CronCommand extends ContainerAwareCommand{
   
    protected function configure()
    {
        $this->setName('app:przypominajka')
            ->setDescription('Przypomnienie o typowaniu');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $doctrine = $this->getContainer()->get('doctrine');
        $em = $doctrine->getEntityManager();
        
        $matchdayObject = $em->getRepository('AppBundle:Matchday')->getMatchday();
        
        // pobranie listy numerów tel. użytkowników, którzy jeszcze nie wytypowali 
        $usersPhones = $em->getRepository('AppBundle:Type')->getNoTypedUsersList($matchdayObject['name']);
        
        ini_set("soap.wsdl_cache_enabled", "0");
        $client = new \SoapClient("http://api.gsmservice.pl/soap/v2/gateway.php?wsdl");
        $arAccount = array("login" => "damcio","pass" => "gutek246");
        $arMessages = array(array(
//            "recipients" => $usersPhones,
            "recipients" => "606119978",
            "message" => "to jest test",
            "sender"=> "Damian",
            "msgType" => 1,
            "unicode" => false,
            "sandbox" => false
        ));
        
        echo "sms powinien zostac wyslany";
        
        // wysłanie smsów o ustalonym w CRON terminie
        $client->SendSMS(array("account" => $arAccount,"messages"=> $arMessages))->return;
        
    }    
}