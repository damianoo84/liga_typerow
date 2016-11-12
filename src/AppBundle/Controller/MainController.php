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
        
        return array('points' => $points);
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
        
        return array('types' => $types);
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
        
        return array('ranks' => $ranks);
    }
    
    /**
     * @Route(
     *      "/principles",
     *      name = "liga_typerow_principles"
     * )
     * @Template()
     */
    public function principlesAction(){
        return array();
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
}