<?php

namespace App\Controller;

use App\Entity\Punishment;
use App\Entity\Student;
use App\Form\PunishmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/punishment")
 */
class PunishmentController extends AbstractController
{
    /**
     * @Route("/{id}", name="punishment_index", methods={"GET"})
     */
    public function index(Student $student): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('punishment/index.html.twig', [
            'punishments' => $student->getPunishments(),
            'student' => $student,
        ]);
    }

    /**
     * @Route("/{id}", name="punishment_show", methods={"GET"})
     */
    public function show(Punishment $punishment): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('punishment/show.html.twig', [
            'punishment' => $punishment,
        ]);
    }

    /**
     * @Route("/{id}/new", name="punishment_new", methods={"GET","POST"})
     */
    public function new(Request $request, Student $student): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $punishment = new Punishment();
        $form = $this->createForm(PunishmentType::class, $punishment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $punishment->setStudent($student);
            $entityManager->persist($punishment);
            $entityManager->flush();

            return $this->redirectToRoute('punishment_index', ["id"=> $student->getId()]);
        }

        return $this->render('punishment/new.html.twig', [
            'punishment' => $punishment,
            'form' => $form->createView(),
            'student' => $student,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="punishment_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Punishment $punishment): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(PunishmentType::class, $punishment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('punishment_index', ["id"=> $punishment->getStudent()->getId()]);
        }

        return $this->render('punishment/edit.html.twig', [
            'punishment' => $punishment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="punishment_delete", methods={"POST"})
     */
    public function delete(Request $request, Punishment $punishment): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($this->isCsrfTokenValid('delete'.$punishment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($punishment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('punishment_index', ["id"=> $punishment->getStudent()->getId()]);
    }
}