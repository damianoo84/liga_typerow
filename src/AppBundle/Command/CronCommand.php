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
        $this->setName('app:my_command')
            ->setDescription('Descripción de lo que hace el comando')
            ->addArgument('my_argument', InputArgument::OPTIONAL, 'Explicamos el significado del argumento');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $em = $this->getContainer()->get('doctrine')->getManager();
//        // Hacemos lo que sea
//        $output->writeln('Hola mundo');
//        $em->flush();
        
        try{
            ini_set("soap.wsdl_cache_enabled", "0");

            // Utworzenie obiektu klienta  Web Services
            $client = new SoapClient("https://api.gsmservice.pl/soap/v2/gateway.php?wsdl");

            // struktura Account - zawiera login oraz haslo do konta API
            $arAccount = array(
			"login" => "test", // Login subkonta API
			"pass" => "test" // Hasło subkonta API
            );

            //  Wysyłanie SMS:

            // Tablica obiektów Message - każdy element zawiera jedną wiadomość SMS, ktora ma zostać wyslana.
            $arMessages = array(array(
                                    "recipients" => array("48123456789"), // Numery telefonów odbiorców danej wiadomości
                                    "message" => "Moja testowa wiadomość", // Tresc wiadomosci
                                    "sender"=> "damcio", // Pole nadawcy, z ktorym ma zostac wyslany SMS (uprzednio zdefiniowane na koncie Uzytkownika)
                                    "msgType" => 1, // Typ wiadomosci SMS: 1 - Tradycyjny SMS, 2 - Flash SMS, 3 - SMS ekonomiczny
                                    "unicode" => false, // Czy wiadomosc ma byc wyslana w kodowaniu UNICODE?
                                    "sandbox" => true // Czy tryb testowy?
				));

            // Wysyłanie SMS - wywolanie metody SendSMS
            $arOutput = $client->SendSMS(array("account" => $arAccount,"messages"=> $arMessages))->return;
            if (!is_array($oOutput)) $arOutput = array($arOutput);

            // Obsluga odpowiedzi z bramki SMS:
            echo "Status żądania: " . $arOutput[0]->status . ", Kod błędu: " . $arOutput[0]->errCode . ", Opis statusu: " . $arOutput[0]->description .
                             ", Nr odbiorcy: " . $arOutput[0]->recipient . ", ID wiadomości: " . $arOutput[0]->msgId . ", Liczba części: " . $arOutput[0]->parts .
                             ", Koszt: " . $arOutput[0]->price . "<br/>";
        }
        catch(Exception $oE)
        {
            print_r($oE);
        }
    }
    
}
