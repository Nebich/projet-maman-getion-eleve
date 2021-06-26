<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\ManyToOne(targetEntity=Group::class, inversedBy="students")
     * @ORM\JoinColumn(nullable=false)
     */
    private $studentGroup;

    /**
     * @ORM\OneToMany(targetEntity=Punishment::class, mappedBy="student", orphanRemoval=true)
     */
    private $punishments;

    /**
     * @ORM\OneToMany(targetEntity=Abscence::class, mappedBy="student", orphanRemoval=true)
     */
    private $abscences;

    public function __construct()
    {
        $this->punishments = new ArrayCollection();
        $this->abscences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getStudentGroup(): ?Group
    {
        return $this->studentGroup;
    }

    public function setStudentGroup(?Group $studentGroup): self
    {
        $this->studentGroup = $studentGroup;

        return $this;
    }

    /**
     * @return Collection|Punishment[]
     */
    public function getPunishments(): Collection
    {
        return $this->punishments;
    }

    public function addPunishment(Punishment $punishment): self
    {
        if (!$this->punishments->contains($punishment)) {
            $this->punishments[] = $punishment;
            $punishment->setStudent($this);
        }

        return $this;
    }

    public function removePunishment(Punishment $punishment): self
    {
        if ($this->punishments->removeElement($punishment)) {
            // set the owning side to null (unless already changed)
            if ($punishment->getStudent() === $this) {
                $punishment->setStudent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Abscence[]
     */
    public function getAbscences(): Collection
    {
        return $this->abscences;
    }

    public function addAbscence(Abscence $abscence): self
    {
        if (!$this->abscences->contains($abscence)) {
            $this->abscences[] = $abscence;
            $abscence->setStudent($this);
        }

        return $this;
    }

    public function removeAbscence(Abscence $abscence): self
    {
        if ($this->abscences->removeElement($abscence)) {
            // set the owning side to null (unless already changed)
            if ($abscence->getStudent() === $this) {
                $abscence->setStudent(null);
            }
        }

        return $this;
    }
}