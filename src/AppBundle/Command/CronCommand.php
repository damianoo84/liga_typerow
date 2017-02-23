<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CronCommand extends ContainerAwareCommand{
   
    protected function configure()
    {
        $this->setName('app:przypominajka')
            ->setDescription('Przypomnienie o typowaniu');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        
        
        
        
        ini_set("soap.wsdl_cache_enabled", "0");
        $client = new SoapClient("http://api.gsmservice.pl/soap/v2/gateway.php?wsdl");
        $arAccount = array("login" => "damcio","pass" => "gutek246");
        $arMessages = array(array(
            "recipients" => array("48606119978"),
            "message" => "Siema ... przypominam o typerce ... dzięki, pozdro",
            "sender"=> "Damian",
            "msgType" => 1,
            "unicode" => false,
            "sandbox" => false
        ));

        $client->SendSMS(array("account" => $arAccount,"messages"=> $arMessages))->return;
    }    
}