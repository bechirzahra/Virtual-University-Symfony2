<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ancienexamen
 *
 * @ORM\Table(name="ancienexamen", indexes={@ORM\Index(name="idEnseignant", columns={"idEnseignant"}), @ORM\Index(name="idModule", columns={"idModule"})})
 * @ORM\Entity
 */
class Ancienexamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAncienExamen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idancienexamen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

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
     * @var \Module
     *
     * @ORM\ManyToOne(targetEntity="Module")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idModule", referencedColumnName="idModule")
     * })
     */
    private $idmodule;



    /**
     * Get idancienexamen
     *
     * @return integer 
     */
    public function getIdancienexamen()
    {
        return $this->idancienexamen;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Ancienexamen
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
     * Set idenseignant
     *
     * @param \University\UserBundle\Entity\User $idenseignant
     * @return Ancienexamen
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
     * Set idmodule
     *
     * @param \MyApp\UlearnBundle\Entity\Module $idmodule
     * @return Ancienexamen
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
}
