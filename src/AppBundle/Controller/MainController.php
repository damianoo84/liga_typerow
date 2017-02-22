<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Type;
use AppBundle\Entity\Meet;
use AppBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class MainController extends Controller{
    
    /**
     * @Route(
     *      "/",
     *      name = "liga_typerow_index"
     * )
     * @Template()
     */
    public function indexAction(){
        
        return array();
    }
    
    /**
     * @Route(
     *      "/tabela",
     *      name = "liga_typerow_table"
     * )
     * @Template()
     */
    public function tableAction(){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Type');
        $points = $repository->getPointsPerMatchday();
        
        $users = $this->usersLogged();
        
        return array('points' => $points, 'users' => $users);
        
    }
    
    
    /**
     * @Route(
     *      "/userstypes",
     *      name = "liga_typerow_userstypes"
     * )
     * @Template()
     */
    public function userstypesAction(){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Type');
        $types = $repository->getTypesPerMeet(1);

        // debug
//      exit(\Doctrine\Common\Util\Debug::dump($types));
        
        $users = $this->usersLogged();
        
        return array('types' => $types, 'users' => $users);
    }

    
    
    /**
     * @Route(
     *      "/typy",
     *      name = "liga_typerow_types"
     * )
     * @Template()
     * 
     */
    public function typesAction(Request $request){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Meet');
        $meets = $repository->getMeetsPerMatchday(1);
        
        if ($request->getMethod() == 'POST') {
            
            $request = $this->getRequest();
            $req = $request->request->all();
            
            $data = array();
            $counter = count(current($req));
            foreach (array_keys($req) as $key) {
                for($i=0; $i<$counter; $i++) {
                    $data[$i][$key] = $req[$key][$i];
                }
            }
            
            foreach ($data as $key){
                $type = new Type();
                $meet = new Meet();
                $meet = $repository->findOneById($key['meet_id']);
                $type->setHostType($key['hostType']);
                $type->setGuestType($key['guestType']);
                $type->setNumberOfPoints(0);
                $type->setUser($this->getUser());
                $type->setMeet($meet);
                
                $validator = $this->get('validator');
                $errors = $validator->validate($type);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($meet);
                $em->persist($type);
                
                if (count($errors) > 0) {
                    return $this->redirect($this->generateUrl('liga_typerow_validation'));
                }
            }
            $em->flush();
            
            return new JsonResponse(array('message' => 'Success!'), 200);
        }
        
        return array('meets' => $meets);
    }
    
   
    
    /**
     * @Route(
     *      "/statystyki",
     *      name = "liga_typerow_statistics"
     * )
     * @Template()
     */
    public function statisticsAction(){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Type');
        $stats = $repository->getStatistics();
        
        return array('stats' => $stats);
    }
    
    /**
     * @Route(
     *      "/ranking",
     *      name = "liga_typerow_ranking"
     * )
     * @Template()
     */
    public function rankingAction(){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Statistic');
        $ranks = $repository->getRanking();
        
        $users = $this->usersLogged();
        
        return array('ranks' => $ranks, 'users' => $users);
    }
    



    /**
     * @Route(
     *      "/zasady",
     *      name = "liga_typerow_principles"
     * )
     * @Template()
     */
    public function principlesAction(){
        
        $principles = array(
            'Gramy przez 15 kolejnych tygodni. Typujemy co tydzień 10 meczy. '
            . 'Należy pamietać że czas na typ to 7 dni liczony od poniedziałku '
            . 'godz.00:00 do niedzieli godz. 23:59',
            'Za prawidłowe wytypowanie rozstrzygnięcia meczu otrzymuje się 2 pkt. '
            . 'Za prawidłowe wytypowanie wyniku bramkowego otrzymuje się 4 pkt.',
            'Jeżeli w meczu dojdzie do dogrywki lub rzutów karnych to liczy się '
            . 'wynik meczu regulaminowych 90 minut.',
            'Jeżeli mecz niezostanie rozegrany w danej kolejce lub przerwany (i nie dokończony) '
            . 'lub zostanie uznany jako walkower, wtedy typy na ten mecz zostają anulowane.',
            'Jeżeli zwycięzcą po 15 kolejkach okażą się dwie lub więcej osób, '
            . 'które będą miały taką samą ilość punktów to zostanie przeprowadzona dogrywka między nimi.'
        );
        
        return array('principles' => $principles);
    }
    
    /**
     * @Route(
     *      "/rekordy",
     *      name = "liga_typerow_records"
     * )
     * @Template()
     */
    public function recordsAction(){
        
        $records = array(
            'Najwięcej punktów w jednej kolejce' => '26 - Piotrek 1(2x),Krystian,Kuba,Wojtek',
            'Najwięcej punktów w sezonie' => '224 - Łukasz',
            'Największa przewaga punktowa zwycięzcy' => '18 - Piotrek 3',
            'Najwięcej trafionych meczy za 2 punkty' => '82 - Marcin',
            'Najwięcej trafionych meczy za 4 punkty' => '28 - Piotrek 3',
            'Najwięcej trafionych meczy w sumie w jednym sezonie' => '93 - Łukasz'
        );
        
        return array('records' => $records);
    }
    
    /**
     * @Route(
     *      "/historia",
     *      name = "liga_typerow_history"
     * )
     * @Template()
     */
    public function historyAction(){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:History');
        $history = $repository->getHistory(11);
        
        return array('points' => $history);
    }

    

    /**
     * @Route(
     *      "/forum",
     *      name = "liga_typerow_forum"
     * )
     * @Template()
     */
    public function forumAction(Request $request){
        
        $repository = $this->getDoctrine()->getRepository("AppBundle:Comment");
        $comments = $repository->findAll();
        
        $repoSeason = $this->getDoctrine()->getRepository("AppBundle:Season");
        $season = $repoSeason->find(10);
        
        if ($request->getMethod() == 'POST') {
            
            $request = $this->getRequest();
            $req = $request->request->get("user_comment");
            
            $comment = new Comment();
            $comment->setUser($this->getUser());
            $comment->setSeason($season);
            $comment->setText($req);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            
            return new JsonResponse(array('message' => 'Success!'), 200);
        }
        
        return array('comments' => $comments);

    }
    

//    public function accountAction(){
//        
//        $repository = $this->getDoctrine()->getRepository('AppBundle:Statistic');
//        $udatas = $repository->getUserData($this->getUser());
//        
//        return array('udatas' => $udatas);
//    }

    /**
     * @Route(
     *      "/validation",
     *      name = "liga_typerow_validation"
     * )
     * @Template()
     */
    public function validationAction(){
        return array();
    }
    
    
    private function usersLogged(){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $repository->getActive();
        
        return $users;
    }
}