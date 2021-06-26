<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Group;
use App\Entity\Student;
use App\Entity\Punishment;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    private $passwordEncoder;
    // injecter la classe de cryptage dans le service
    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
    $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        /**
         * Ajouter 2 admins :
         * boss@mmi.edu / boss en ROLE_ADMIN
         * marcel@mmi.edu / bouzigue en ROLE_WRITER
         *
        */
        $user = new User();
        $user->setEmail('marcel@mmi.edu')
        ->setRoles(['ROLE_WRITER'])
        ->setPassword($this->passwordEncoder->hashPassword($user,'bouzigue'))
        ->setLastName('Marcel')
        ->setName('Dubois');
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setEmail('boss@mmi.edu')
        ->setRoles(['ROLE_ADMIN'])
        ->setPassword($this->passwordEncoder->hashPassword($user,'boss'))
        ->setLastName('Boss')
        ->setName('mmi');
        $manager->persist($user);

        /**
         * Création d'un groupe'
         */
        $group= new Group();
        $group->setName('4ème A')
        ->setUser($user);
        $manager->persist($group);

        /**
         * Création d'élèves
         */
        $student = new Student();
        $student->setName('Pierre')
        ->setLastName('Paum')
        ->setStudentGroup($group);
        $manager->persist($student);

        /**
         * Ajout d'une punition
         */
        $punishment = new Punishment();
        $punishment->setDate(new DateTime())
        ->setWording('Oubli de matériel')
        ->setStudent($student);
        
        /**
         * Création d'un groupe'
         */
        $group= new Group();
        $group->setName('4ème B')
        ->setUser($user);
        $manager->persist($group);

        /**
         * Création d'élèves
         */
        $student = new Student();
        $student->setName('Jacky')
        ->setLastName('Tunning')
        ->setStudentGroup($group);
        $manager->persist($student);


        /**
         * Ajout d'une punition
         */
        $punishment = new Punishment();
        $punishment->setDate(new DateTime())
        ->setWording('Bavarde en cours')
        ->setStudent($student);
        
        /**
         * Création d'un groupe'
         */
        $group= new Group();
        $group->setName('4ème C')
        ->setUser($user);
        $manager->persist($group);
        
         /**
         * Création d'élèves
         */
        $student = new Student();
        $student->setName('Patrick')
        ->setLastName('Sebastien')
        ->setStudentGroup($group);
        $manager->persist($student);

        /**
         * Ajout d'une punition
         */
        $punishment = new Punishment();
        $punishment->setDate(new DateTime())
        ->setWording('Insulte')
        ->setStudent($student);


        $manager->flush();
    }
}