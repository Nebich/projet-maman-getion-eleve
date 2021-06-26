<?php

namespace App\Controller;

use App\Entity\Student;
use App\Entity\Abscence;
use App\Form\AbscenceType;
use App\Repository\AbscenceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/abscence")
 */
class AbscenceController extends AbstractController
{
    
    /**
     * @Route("/{id}", name="abscence_index", methods={"GET"})
     */
    public function index(Student $student): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('abscence/index.html.twig', [
            'abscences' => $student->getAbscences(),
            'student' => $student,
        ]);
    }

    /**
     * @Route("/{id}/new", name="abscence_new", methods={"GET","POST"})
     */
    public function new(Request $request, Student $student): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $abscence = new Abscence();
        $form = $this->createForm(AbscenceType::class, $abscence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $abscence->setStudent($student);
            $entityManager->persist($abscence);
            $entityManager->flush();

            return $this->redirectToRoute('abscence_index', ["id"=> $student->getId()]);
        }

        return $this->render('abscence/new.html.twig', [
            'abscence' => $abscence,
            'form' => $form->createView(),
            'student' => $student
        ]);
    }

    /**
     * @Route("/{id}", name="abscence_show", methods={"GET"})
     */
    public function show(Abscence $abscence): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('abscence/show.html.twig', [
            'abscence' => $abscence,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="abscence_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Abscence $abscence): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(AbscenceType::class, $abscence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('abscence_index', ["id"=> $abscence->getStudent()->getId()]);
        }

        return $this->render('abscence/edit.html.twig', [
            'abscence' => $abscence,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abscence_delete", methods={"POST"})
     */
    public function delete(Request $request, Abscence $abscence): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($this->isCsrfTokenValid('delete'.$abscence->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($abscence);
            $entityManager->flush();
        }

        return $this->redirectToRoute('abscence_index', ["id"=> $abscence->getStudent()->getId()]);
    }
}