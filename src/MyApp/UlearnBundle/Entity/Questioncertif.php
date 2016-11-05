<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questioncertif
 *
 * @ORM\Table(name="questioncertif", indexes={@ORM\Index(name="idCertification", columns={"idCertification"})})
 * @ORM\Entity
 */
class Questioncertif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idQCertif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idqcertif;

    /**
     * @var \Certification
     *
     * @ORM\ManyToOne(targetEntity="Certification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCertification", referencedColumnName="idCertification")
     * })
     */
    private $idcertification;



    /**
     * Get idqcertif
     *
     * @return integer 
     */
    public function getIdqcertif()
    {
        return $this->idqcertif;
    }

    /**
     * Set idcertification
     *
     * @param \MyApp\UlearnBundle\Entity\Certification $idcertification
     * @return Questioncertif
     */
    public function setIdcertification(\MyApp\UlearnBundle\Entity\Certification $idcertification = null)
    {
        $this->idcertification = $idcertification;

        return $this;
    }

    /**
     * Get idcertification
     *
     * @return \MyApp\UlearnBundle\Entity\Certification 
     */
    public function getIdcertification()
    {
        return $this->idcertification;
    }
}
