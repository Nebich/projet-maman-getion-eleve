<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Student;
use App\Form\StudentType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/student")
 */
class StudentController extends AbstractController
{
    /**
     * @var Security
     */
    private $security;
    
    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    /**
     * @Route("/{id}/new", name="student_new", methods={"GET","POST"})
     *
     */
    public function new(Request $request, Group $group): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->security->getUser();
        $groups = $user->getGroups();
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student, );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $student->setStudentGroup($group);
            $entityManager->persist($student);
            $entityManager->flush();

            return $this->redirectToRoute('student_index', ['id' =>$group->getId()]);
        }

        return $this->render('student/new.html.twig', [
            'student' => $student,
            'form' => $form->createView(),
            'groups' => $groups,
            'group' => $group,
        ]);
    }
    /**
     * @Route("/{id}", name="student_index", methods={"GET"})
     */
    public function index(Group $group): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $abscences = self::getAbscencesByGroup($group);
        $punishments = self::getPunishmentsByGroup($group);
        return $this->render('student/index.html.twig', [
            'students' => $group->getStudents(),
            'group' => $group,
            'punishments' => $punishments,
            'abscences'=> $abscences,
        ]);
    }

    
    /**
     * @Route("/{id}", name="student_show", methods={"GET"})
     */
    public function show(Student $student): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('student/show.html.twig', [
            'student' => $student,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Student $student): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->security->getUser();
        $groups = $user->getGroups();
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_index', ['id' =>$student->getStudentGroup()->getId()]);
        }

        return $this->render('student/edit.html.twig', [
            'student' => $student,
            'form' => $form->createView(),
            'groups' => $groups,
        ]);
    }

    /**
     * @Route("/{id}", name="student_delete", methods={"POST"})
     */
    public function delete(Request $request, Student $student): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($student);
            $entityManager->flush();
        }

        return $this->redirectToRoute('student_index', ['id' =>$student->getStudentGroup()->getId()]);
    }

    /**
     * Obtenir les sanctions d'une classe
     */
    public static function getPunishmentsByGroup(Group $group)
    {
        $students = $group->getStudents();
        $punishments = [];
        foreach($students as $student){
            if($student->getPunishments()){
                foreach($student->getPunishments() as $punishment){
                    array_push($punishments, $punishment);
                }
            }
        }
        return $punishments;
    }

    /**
     * Obtenir les abscences d'une classe
     */
    public static function getAbscencesByGroup(Group $group)
    {
        $students = $group->getStudents();
        $abscences = [];
        foreach($students as $student){
            if($student->getPunishments()){
                foreach($student->getAbscences() as $abscence){
                    array_push($abscences, $abscence);
                }
            }
        }
        return $abscences;
    }
}