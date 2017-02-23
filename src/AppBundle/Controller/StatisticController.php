<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Statistic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Statistic controller.
 *
 * @Route("/admin-panel/statistic")
 */
class StatisticController extends Controller
{
    /**
     * Lists all statistic entities.
     *
     * @Route("/", name="admin_statistic_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $statistics = $em->getRepository('AppBundle:Statistic')->findAll();

        return $this->render('statistic/index.html.twig', array(
            'statistics' => $statistics,
        ));
    }

    /**
     * Creates a new statistic entity.
     *
     * @Route("/new", name="statistic_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $statistic = new Statistic();
        $form = $this->createForm('AppBundle\Form\StatisticType', $statistic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($statistic);
            $em->flush($statistic);

            return $this->redirectToRoute('statistic_show', array('id' => $statistic->getId()));
        }

        return $this->render('statistic/new.html.twig', array(
            'statistic' => $statistic,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a statistic entity.
     *
     * @Route("/{id}", name="statistic_show")
     * @Method("GET")
     */
    public function showAction(Statistic $statistic)
    {
        $deleteForm = $this->createDeleteForm($statistic);

        return $this->render('statistic/show.html.twig', array(
            'statistic' => $statistic,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing statistic entity.
     *
     * @Route("/{id}/edit", name="statistic_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Statistic $statistic)
    {
        $deleteForm = $this->createDeleteForm($statistic);
        $editForm = $this->createForm('AppBundle\Form\StatisticType', $statistic);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('statistic_edit', array('id' => $statistic->getId()));
        }

        return $this->render('statistic/edit.html.twig', array(
            'statistic' => $statistic,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a statistic entity.
     *
     * @Route("/{id}", name="statistic_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Statistic $statistic)
    {
        $form = $this->createDeleteForm($statistic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($statistic);
            $em->flush($statistic);
        }

        return $this->redirectToRoute('statistic_index');
    }

    /**
     * Creates a form to delete a statistic entity.
     *
     * @param Statistic $statistic The statistic entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Statistic $statistic)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('statistic_delete', array('id' => $statistic->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
