<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certification
 *
 * @ORM\Table(name="certification", indexes={@ORM\Index(name="idEtudiant", columns={"idAdmin"})})
 * @ORM\Entity
 */
class Certification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCertification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcertification;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30, nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePassage", type="date", nullable=false)
     */
    private $datepassage;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCertif", type="string", length=30, nullable=false)
     */
    private $nomcertif;

    /**
     * @var \Admin\AdminBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdmin", referencedColumnName="id")
     * })
     */
    private $idadmin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Admin\AdminBundle\Entity\User", inversedBy="idcertification")
     * @ORM\JoinTable(name="resultat",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idCertification", referencedColumnName="idCertification")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id")
     *   }
     * )
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
     * Get idcertification
     *
     * @return integer 
     */
    public function getIdcertification()
    {
        return $this->idcertification;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Certification
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
     * Set datepassage
     *
     * @param \DateTime $datepassage
     * @return Certification
     */
    public function setDatepassage($datepassage)
    {
        $this->datepassage = $datepassage;

        return $this;
    }

    /**
     * Get datepassage
     *
     * @return \DateTime 
     */
    public function getDatepassage()
    {
        return $this->datepassage;
    }

    /**
     * Set nomcertif
     *
     * @param string $nomcertif
     * @return Certification
     */
    public function setNomcertif($nomcertif)
    {
        $this->nomcertif = $nomcertif;

        return $this;
    }

    /**
     * Get nomcertif
     *
     * @return string 
     */
    public function getNomcertif()
    {
        return $this->nomcertif;
    }

    /**
     * Set idadmin
     *
     * @param \Admin\AdminBundle\Entity\User $idadmin
     * @return Certification
     */
    public function setIdadmin(\Admin\AdminBundle\Entity\User $idadmin = null)
    {
        $this->idadmin = $idadmin;

        return $this;
    }

    /**
     * Get idadmin
     *
     * @return \Admin\AdminBundle\Entity\User 
     */
    public function getIdadmin()
    {
        return $this->idadmin;
    }

    /**
     * Add idetudiant
     *
     * @param \Admin\AdminBundle\Entity\User $idetudiant
     * @return Certification
     */
    public function addIdetudiant(\Admin\AdminBundle\Entity\User $idetudiant)
    {
        $this->idetudiant[] = $idetudiant;

        return $this;
    }

    /**
     * Remove idetudiant
     *
     * @param \Admin\AdminBundle\Entity\User $idetudiant
     */
    public function removeIdetudiant(\Admin\AdminBundle\Entity\User $idetudiant)
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
