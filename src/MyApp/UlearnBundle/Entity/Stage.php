<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", indexes={@ORM\Index(name="idChefEntreprise", columns={"idChefEntreprise"}), @ORM\Index(name="idEtudiant", columns={"idEtudiant"})})
 * @ORM\Entity
 */
class Stage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idStage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstage;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEntreprise", type="string", length=30, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30, nullable=false)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=30, nullable=false)
     */
    private $domaine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=false)
     */
    private $description;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="University\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChefEntreprise", referencedColumnName="id")
     * })
     */
    private $idchefentreprise;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="University\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id")
     * })
     */
    private $idetudiant;



    /**
     * Get idstage
     *
     * @return integer 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }

    /**
     * Set nomentreprise
     *
     * @param string $nomentreprise
     * @return Stage
     */
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    /**
     * Get nomentreprise
     *
     * @return string 
     */
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Stage
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
     * Set domaine
     *
     * @param string $domaine
     * @return Stage
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Stage
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
     * Set description
     *
     * @param string $description
     * @return Stage
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idchefentreprise
     *
     * @param \University\UserBundle\Entity\User $idchefentreprise
     * @return Stage
     */
    public function setIdchefentreprise(\University\UserBundle\Entity\User $idchefentreprise = null)
    {
        $this->idchefentreprise = $idchefentreprise;

        return $this;
    }

    /**
     * Get idchefentreprise
     *
     * @return \University\UserBundle\Entity\User
     */
    public function getIdchefentreprise()
    {
        return $this->idchefentreprise;
    }

    /**
     * Set idetudiant
     *
     * @param \MyApp\UlearnBundle\Entity\User $idetudiant
     * @return Stage
     */
    public function setIdetudiant(\MyApp\UlearnBundle\Entity\User $idetudiant = null)
    {
        $this->idetudiant = $idetudiant;

        return $this;
    }

    /**
     * Get idetudiant
     *
     * @return \MyApp\UlearnBundle\Entity\User 
     */
    public function getIdetudiant()
    {
        return $this->idetudiant;
    }
}
