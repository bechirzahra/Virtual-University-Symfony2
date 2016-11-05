<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MyApp\UlearnBundle\Entity\Cours;
/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="MyApp\UlearnBundle\Entity\EvaluationRepository")
 */
class Evaluation {
   /**
     * @var integer
     *
     * @ORM\Column(name="idEvaluation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevaluation;
    
    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\University\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idetudiant", referencedColumnName="id")
     * })
     */
    private $idetudiant;
   /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCours", referencedColumnName="idCours")
     * })
     */
    private $idcours;   
    
    /**
     * @var float
     *
     * @ORM\Column(name="note",type="float")
     */
    private $note;
    
      /**
     * @var string
     *
     * @ORM\Column(name="commentaire",type="string")
     */
    private $commentaire;
    
    /**
     * @var date
     *
     * @ORM\Column(name="date",type="date")
     */
    private $date;
    
    
   /**
     * Set idetudiant
     *
     * @param \University\UserBundle\Entity\User $idetudiant
     * @return User
     */
    public function setIdetudiant(\University\UserBundle\Entity\User $idetudiant = null)
    {
        $this->idetudiant = $idetudiant;

        return $this;
    }

    /**
     * Get idetudiant
     *
     * @return \University\UserBundle\Entity\User 
     */
    public function getIdetudiant()
    {
        return $this->idetudiant;
    }

    
    /**
     * Set idcours
     *
     * @param \MyApp\UlearnBundle\Entity\Cours  $idcours
     * @return Cours
     */
    public function setIdcours(Cours $idcours)
    {
        $this->idcours = $idcours;

        return $this;
    }

    /**
     * Get idcours
     *
     * @return \MyApp\UlearnBundle\Entity\Cours
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

  

    function getNote() {
        return $this->note;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

   

    function setNote($note) {
        $this->note = $note;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }
    function getDate() {
        return $this->date;
    }

    function setDate(date $date) {
        $this->date = $date;
    }


    


}
