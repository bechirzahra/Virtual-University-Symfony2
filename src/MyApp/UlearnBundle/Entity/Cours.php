<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="idMatiere", columns={"idModule"}), @ORM\Index(name="idEnseignant", columns={"idEnseignant"}), @ORM\Index(name="idResponsable", columns={"idResponsable"})})
 * @ORM\Entity(repositoryClass="MyApp\UlearnBundle\Entity\CoursRepository")
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCours", type="string", length=30, nullable=false)
     */
    private $nomcours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valider", type="boolean", nullable=true)
     */
    private $valider;

    /**
     * @var string
     *
     * @ORM\Column(name="cheminCours", type="string", length=100, nullable=false)
     */
    private $chemincours;

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
     *   @ORM\JoinColumn(name="idResponsable", referencedColumnName="id")
     * })
     */
    private $idresponsable;

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
     * @ORM\ManyToMany(targetEntity="University\UserBundle\Entity\User", mappedBy="idcours")
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
     * Get idcours
     *
     * @return integer 
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Cours
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
     * Set nomcours
     *
     * @param string $nomcours
     * @return Cours
     */
    public function setNomcours($nomcours)
    {
        $this->nomcours = $nomcours;

        return $this;
    }

    /**
     * Get nomcours
     *
     * @return string 
     */
    public function getNomcours()
    {
        return $this->nomcours;
    }

    /**
     * Set valider
     *
     * @param boolean $valider
     * @return Cours
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean 
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set chemincours
     *
     * @param string $chemincours
     * @return Cours
     */
    public function setChemincours($chemincours)
    {
        $this->chemincours = $chemincours;

        return $this;
    }

    /**
     * Get chemincours
     *
     * @return string 
     */
    public function getChemincours()
    {
        return $this->chemincours;
    }

    /**
     * Set idmodule
     *
     * @param \MyApp\UlearnBundle\Entity\Module $idmodule
     * @return Cours
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
     * Set idresponsable
     *
     * @param \University\UserBundle\Entity\User $idresponsable
     * @return Cours
     */
    public function setIdresponsable(\University\UserBundle\Entity\User $idresponsable = null)
    {
        $this->idresponsable = $idresponsable;

        return $this;
    }

    /**
     * Get idresponsable
     *
     * @return \University\UserBundle\Entity\User 
     */
    public function getIdresponsable()
    {
        return $this->idresponsable;
    }

    /**
     * Set idenseignant
     *
     * @param \University\UserBundle\Entity\User $idenseignant
     * @return Cours
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
     * @return Cours
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
     public function __toString() {
        return (String) $this->idmodule;
    }
}
