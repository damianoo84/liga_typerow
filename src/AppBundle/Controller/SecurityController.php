<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller{

    /**
     * @Route(
     *      "/login",
     *      name = "liga_typerow_login"
     * )
     * @Template()
     */
    public function loginAction(Request $Request)
    {
        $Session = $this->get('session');
        
        if($Request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)){
            $loginError = $Request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        }  else {
            $loginError = $Session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }

        $userName = $Session->get(SecurityContextInterface::LAST_USERNAME);
        
        return array(
            'loginError' => $loginError,
            'userName' => $userName
        );
       
    }
    
}
