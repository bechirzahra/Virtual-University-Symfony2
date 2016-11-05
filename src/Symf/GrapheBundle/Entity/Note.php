<?php

namespace Symf\GrapheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity
 */
class Note {
    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="idEtudiant_id", referencedColumnName="id", onDelete="CASCADE")
     * @ORM\Column(name="idEtudiant", type="integer")
     * 
     * 
     */
    private $idEtudiant;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Examen")
     * @ORM\JoinColumn(name="idExamen_id", referencedColumnName="idExamen", onDelete="CASCADE")
     * @ORM\Column(name="idExamen", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExamen;   
    /**
     * @var float
     *
     * @ORM\Column(name="noteE",type="float")
     */
    private $noteE;
    function getIdEtudiant() {
        return $this->idEtudiant;
    }

    function getIdExamen() {
        return $this->idExamen;
    }

    function getNoteE() {
        return $this->noteE;
    }

    function setIdEtudiant($idEtudiant) {
        $this->idEtudiant = $idEtudiant;
    }

    function setIdExamen($idExamen) {
        $this->idExamen = $idExamen;
    }

    function setNoteE($noteE) {
        $this->noteE = $noteE;
    }


}
