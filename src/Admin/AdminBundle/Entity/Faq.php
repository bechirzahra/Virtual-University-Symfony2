<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faq
 */
class Faq
{
    /**
     * @var integer
     */
    private $idfaq;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var string
     */
    private $objet;


    /**
     * Get idfaq
     *
     * @return integer 
     */
    public function getIdfaq()
    {
        return $this->idfaq;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Faq
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Faq
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }
}
