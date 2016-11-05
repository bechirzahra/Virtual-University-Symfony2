<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionexamen
 *
 * @ORM\Table(name="questionexamen", indexes={@ORM\Index(name="idExamen", columns={"idExamen"})})
 * @ORM\Entity
 */
class Questionexamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idQuestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="string", length=200, nullable=false)
     */
    private $corps;

    /**
     * @var string
     *
     * @ORM\Column(name="choix1", type="string", length=200, nullable=false)
     */
    private $choix1;

    /**
     * @var string
     *
     * @ORM\Column(name="choix2", type="string", length=200, nullable=false)
     */
    private $choix2;

    /**
     * @var string
     *
     * @ORM\Column(name="choix3", type="string", length=200, nullable=false)
     */
    private $choix3;

    /**
     * @var string
     *
     * @ORM\Column(name="choix4", type="string", length=200, nullable=false)
     */
    private $choix4;

    /**
     * @var string
     *
     * @ORM\Column(name="bonneReponse", type="string", length=200, nullable=false)
     */
    private $bonnereponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="barem", type="integer", nullable=false)
     */
    private $barem;

    /**
     * @var \Examen
     *
     * @ORM\ManyToOne(targetEntity="Examen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idExamen", referencedColumnName="idExamen")
     * })
     */
    private $idexamen;



    /**
     * Get idquestion
     *
     * @return integer 
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set corps
     *
     * @param string $corps
     * @return Questionexamen
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;

        return $this;
    }

    /**
     * Get corps
     *
     * @return string 
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Set choix1
     *
     * @param string $choix1
     * @return Questionexamen
     */
    public function setChoix1($choix1)
    {
        $this->choix1 = $choix1;

        return $this;
    }

    /**
     * Get choix1
     *
     * @return string 
     */
    public function getChoix1()
    {
        return $this->choix1;
    }

    /**
     * Set choix2
     *
     * @param string $choix2
     * @return Questionexamen
     */
    public function setChoix2($choix2)
    {
        $this->choix2 = $choix2;

        return $this;
    }

    /**
     * Get choix2
     *
     * @return string 
     */
    public function getChoix2()
    {
        return $this->choix2;
    }

    /**
     * Set choix3
     *
     * @param string $choix3
     * @return Questionexamen
     */
    public function setChoix3($choix3)
    {
        $this->choix3 = $choix3;

        return $this;
    }

    /**
     * Get choix3
     *
     * @return string 
     */
    public function getChoix3()
    {
        return $this->choix3;
    }

    /**
     * Set choix4
     *
     * @param string $choix4
     * @return Questionexamen
     */
    public function setChoix4($choix4)
    {
        $this->choix4 = $choix4;

        return $this;
    }

    /**
     * Get choix4
     *
     * @return string 
     */
    public function getChoix4()
    {
        return $this->choix4;
    }

    /**
     * Set bonnereponse
     *
     * @param string $bonnereponse
     * @return Questionexamen
     */
    public function setBonnereponse($bonnereponse)
    {
        $this->bonnereponse = $bonnereponse;

        return $this;
    }

    /**
     * Get bonnereponse
     *
     * @return string 
     */
    public function getBonnereponse()
    {
        return $this->bonnereponse;
    }

    /**
     * Set barem
     *
     * @param integer $barem
     * @return Questionexamen
     */
    public function setBarem($barem)
    {
        $this->barem = $barem;

        return $this;
    }

    /**
     * Get barem
     *
     * @return integer 
     */
    public function getBarem()
    {
        return $this->barem;
    }

    /**
     * Set idexamen
     *
     * @param \MyApp\UlearnBundle\Entity\Examen $idexamen
     * @return Questionexamen
     */
    public function setIdexamen(\MyApp\UlearnBundle\Entity\Examen $idexamen = null)
    {
        $this->idexamen = $idexamen;

        return $this;
    }

    /**
     * Get idexamen
     *
     * @return \MyApp\UlearnBundle\Entity\Examen 
     */
    public function getIdexamen()
    {
        return $this->idexamen;
    }
}
