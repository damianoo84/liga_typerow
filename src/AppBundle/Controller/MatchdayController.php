<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Matchday;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Matchday controller.
 *
 * @Route("/admin-panel/matchday")
 * @Security("has_role('ROLE_ADMIN')")
 */
class MatchdayController extends Controller
{
    /**
     * Lists all matchday entities.
     *
     * @Route("/", name="admin_matchday_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matchdays = $em->getRepository('AppBundle:Matchday')->findAll();

        return $this->render('matchday/index.html.twig', array(
            'matchdays' => $matchdays,
        ));
    }

    /**
     * Creates a new matchday entity.
     *
     * @Route("/new", name="matchday_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $matchday = new Matchday();
        $form = $this->createForm('AppBundle\Form\MatchdayType', $matchday);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matchday);
            $em->flush($matchday);

            return $this->redirectToRoute('matchday_show', array('id' => $matchday->getId()));
        }

        return $this->render('matchday/new.html.twig', array(
            'matchday' => $matchday,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a matchday entity.
     *
     * @Route("/{id}", name="matchday_show")
     * @Method("GET")
     */
    public function showAction(Matchday $matchday)
    {
        $deleteForm = $this->createDeleteForm($matchday);

        return $this->render('matchday/show.html.twig', array(
            'matchday' => $matchday,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing matchday entity.
     *
     * @Route("/{id}/edit", name="matchday_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Matchday $matchday)
    {
        $deleteForm = $this->createDeleteForm($matchday);
        $editForm = $this->createForm('AppBundle\Form\MatchdayType', $matchday);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matchday_edit', array('id' => $matchday->getId()));
        }

        return $this->render('matchday/edit.html.twig', array(
            'matchday' => $matchday,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a matchday entity.
     *
     * @Route("/{id}", name="matchday_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Matchday $matchday)
    {
        $form = $this->createDeleteForm($matchday);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($matchday);
            $em->flush($matchday);
        }

        return $this->redirectToRoute('matchday_index');
    }

    /**
     * Creates a form to delete a matchday entity.
     *
     * @param Matchday $matchday The matchday entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matchday $matchday)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('matchday_delete', array('id' => $matchday->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
