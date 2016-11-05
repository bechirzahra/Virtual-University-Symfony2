<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen", indexes={@ORM\Index(name="idEnseignant", columns={"idEnseignant"}), @ORM\Index(name="idMatiere", columns={"idModule"})})
 * @ORM\Entity
 */
class Examen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idExamen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexamen;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30, nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Module
     *
     * @ORM\ManyToOne(targetEntity="Module")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idModule", referencedColumnName="idModule")
     * })
     */
    private $idmodule;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="University\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEnseignant", referencedColumnName="id")
     * })
     */
    private $idenseignant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="University\UserBundle\Entity\User", mappedBy="idexamen")
     */
    private $idetudiant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idetudiant = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idexamen
     *
     * @return integer 
     */
    public function getIdexamen()
    {
        return $this->idexamen;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Examen
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Examen
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idmodule
     *
     * @param \MyApp\UlearnBundle\Entity\Module $idmodule
     * @return Examen
     */
    public function setIdmodule(\MyApp\UlearnBundle\Entity\Module $idmodule = null)
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    /**
     * Get idmodule
     *
     * @return \MyApp\UlearnBundle\Entity\Module 
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set idenseignant
     *
     * @param \University\UserBundle\Entity\User $idenseignant
     * @return Examen
     */
    public function setIdenseignant(\University\UserBundle\Entity\User $idenseignant = null)
    {
        $this->idenseignant = $idenseignant;

        return $this;
    }

    /**
     * Get idenseignant
     *
     * @return \University\UserBundle\Entity\User
     */
    public function getIdenseignant()
    {
        return $this->idenseignant;
    }

    /**
     * Add idetudiant
     *
     * @param \University\UserBundle\Entity\User $idetudiant
     * @return Examen
     */
    public function addIdetudiant(\University\UserBundle\Entity\User $idetudiant)
    {
        $this->idetudiant[] = $idetudiant;

        return $this;
    }

    /**
     * Remove idetudiant
     *
     * @param \University\UserBundle\Entity\User $idetudiant
     */
    public function removeIdetudiant(\University\UserBundle\Entity\User $idetudiant)
    {
        $this->idetudiant->removeElement($idetudiant);
    }

    /**
     * Get idetudiant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdetudiant()
    {
        return $this->idetudiant;
    }
}
