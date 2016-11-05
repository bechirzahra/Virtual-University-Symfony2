<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity
 */
class Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idModule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodule;

    /**
     * @var string
     *
     * @ORM\Column(name="nomModule", type="string", length=20, nullable=false)
     */
    private $nommodule;



    /**
     * Get idmodule
     *
     * @return integer 
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set nommodule
     *
     * @param string $nommodule
     * @return Module
     */
    public function setNommodule($nommodule)
    {
        $this->nommodule = $nommodule;

        return $this;
    }

    /**
     * Get nommodule
     *
     * @return string 
     */
    public function getNommodule()
    {
        return $this->nommodule;
    }
    
    public function __toString() {
        return (String) $this->idmodule;
    }
}
